<?php

/**
 * Firebase Service
 *
 * @package     RIdein
 * @subpackage  Services
 * @category    Service
 * @author      Source monster Team
 * @version     3.0.1
 * @link        https://sourcemonster.in
 */

namespace App\Services;

use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Database;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\Notification;
use Kreait\Firebase\Messaging\AndroidConfig;
use Kreait\Firebase\Exception\Auth\FailedToVerifyToken;
use Kreait\Firebase\Messaging\MessageData;
use Kreait\Firebase\Messaging\ApnsConfig;
use Kreait\Firebase\Exception\FirebaseException;
use Throwable;

class FirebaseService
{

	protected $messaging;
	protected $firebase;
	protected $database;

	/**
	 * Constructor
	 * 
	 */
	public function __construct()
	{
		$filePath = base_path() . api_credentials("service_account", "Firebase");
		try {
	
			$this->firebase = (new Factory())->withServiceAccount($filePath)->withDatabaseUri(api_credentials("database_url", "Firebase"));
			$this->database = $this->firebase->createDatabase();
			$this->messaging =  $this->firebase->createMessaging();
		} catch (FirebaseException $e) {
			echo 'An error has occurred while working with the SDK: ' . $e->getMessage;
		} catch (Throwable $e) {
			echo 'A not-Firebase specific error has occurred: ' . $e->getMessage;
			$this->firebase = $this->database = null;
		}
	}

	/**
	 * get Database With Reference
	 *
	 * @param String $[reference] [reference path]
	 * @return reference
	 */
	public function getDatabaseWithReference($reference)
	{
		if (!isset($this->database)) {
			return null;
		}
		$base_path = env('FIREBASE_PREFIX', 'live') . '/';
		return $this->database->getReference($base_path . $reference);
	}

	/**
	 * Update Reference in Database
	 *
	 * @param String $[reference] [reference path]
	 * @param Json $[data]
	 * @return reference
	 */
	public function updateReference($reference, $data)
	{
		$reference = $this->getDatabaseWithReference($reference);
		if (!isset($reference)) {
			return null;
		}
		return $reference->set($data);
	}

	/**
	 * Delete Reference from Database
	 *
	 * @param String $[reference] [reference path]
	 * @return reference
	 */
	public function deleteReference($reference)
	{
		$reference = $this->getDatabaseWithReference($reference);
		if (!isset($reference)) {
			\Log::error('notification can\'t be delete' . $reference);
			return null;
		}
		\Log::error('notification deleted' . $reference);
		return $reference->set(null);
	}

	/**
	 * Create Custom Token
	 *
	 * @param User unique id
	 * @return token
	 */
	public function createCustomToken($user_id)
	{
		\Log::error('user_id' . $user_id);
		$auth = $this->firebase->createAuth();
		$customToken = $auth->createCustomToken($user_id);
		$customTokenString = $customToken->toString();
		return $customTokenString;
	}


	public function vertifyToken($idTokenString)
	{
		try {
			$auth = $this->firebase->createAuth();
			$verifiedIdToken = $auth->verifyIdToken($idTokenString);
		} catch (FailedToVerifyToken $e) {
			echo 'The token is invalid: ' . $e->getMessage();
		}

		$uid = $verifiedIdToken->claims()->get('sub');

		$user = $auth->firebase->getUser($uid);
		return $user;
	}


	/**
	 * Create Android noftication
	 *
	 * @param User unique id
	 * @return token
	 */
	public function sendAndroidNotification($push_tittle, $data, $user_type, $device_id, $change_title = 0, $firebase_data = array())
	{
		try {

			$data = $data + $firebase_data;

			//userId vai ser o topic (TODO: mudar para token)
			$message = CloudMessage::withTarget('token', $device_id)
				->withData(['custom' => json_encode($data)])
				->withDefaultSounds()
				->withAndroidConfig(AndroidConfig::fromArray([
					'ttl' => '15s',
					'priority' => 'high'
				]));

			return  $this->messaging->send($message);
		} catch (\Exception $e) {

			logger('push android notification error : ' . $e->getMessage());
		}
	}




	/**
	 * Create Apple noftication
	 *
	 * @param User unique id
	 * @return token
	 */
	public function sendAppleNotification($push_tittle, $data, $user_type, $device_id, $change_title = 0, $firebase_data = array())
	{
		try {
			$title = $user_type;
			if ($change_title) {
				if (isset($data['custom_message'])) {
					$title = $data['custom_message']['push_title'];
					unset($data['custom_message']['push_title']);
				}

				if (isset($data['chat_notification'])) {
					$title = $push_tittle;
					$push_tittle = $data['chat_notification']['title'];
					unset($data['chat_notification']['title']);
				}
			}
			//merge firbase data 
			$data = $data + $firebase_data;

			//userId vai ser o topic (TODO: mudar para token)
			$message = CloudMessage::withTarget('token', $device_id)
				->withData(['custom' => json_encode($data)])
				->withNotification(['title' => 	$title, 'body' => $push_tittle])
				->withDefaultSounds()
				->withApnsConfig(ApnsConfig::fromArray([
					'headers' => [
						'apns-priority' => '10',
					],
				]));

			return  $this->messaging->send($message);
		} catch (\Exception $e) {

			logger('push ios notification error : ' . $e->getMessage());
		}
	}
}
