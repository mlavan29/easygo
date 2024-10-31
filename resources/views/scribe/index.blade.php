<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .php-example code { display: none; }
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://rideinjune.test";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.37.1.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.37.1.js") }}"></script>

</head>

<body data-languages="[&quot;php&quot;,&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="php">php</button>
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-web_payment">
                                <a href="#endpoints-POSTapi-web_payment">POST api/web_payment</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-payment-success">
                                <a href="#endpoints-POSTapi-payment-success">POST api/payment/success</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-payment-verify">
                                <a href="#endpoints-POSTapi-payment-verify">POST api/payment/verify</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-payment-cancel">
                                <a href="#endpoints-GETapi-payment-cancel">GET api/payment/cancel</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-cron_request_car">
                                <a href="#endpoints-GETapi-cron_request_car">Cron request to cars for scheduled ride</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-cron_offline">
                                <a href="#endpoints-GETapi-cron_offline">Update User Offline status</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-currency_cron">
                                <a href="#endpoints-GETapi-currency_cron">Update Currency rate</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-update_referral_cron">
                                <a href="#endpoints-GETapi-update_referral_cron">Update Referral Status</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-paypal_payout">
                                <a href="#endpoints-GETapi-paypal_payout">Update Paypal Payout Status</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-check_version">
                                <a href="#endpoints-GETapi-check_version">GET api/check_version</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-register">
                                <a href="#endpoints-GETapi-register">User Resister</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-socialsignup">
                                <a href="#endpoints-GETapi-socialsignup">User Socail media Resister & Login</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-apple_callback">
                                <a href="#endpoints-GETapi-apple_callback">User Socail media Resister & Login</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-login">
                                <a href="#endpoints-GETapi-login">User Login</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-delete-user">
                                <a href="#endpoints-POSTapi-delete-user">POST api/delete-user</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-otp_verification">
                                <a href="#endpoints-GETapi-otp_verification">GET api/otp_verification</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-numbervalidation">
                                <a href="#endpoints-GETapi-numbervalidation">Mobile number verification</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-emailvalidation">
                                <a href="#endpoints-GETapi-emailvalidation">User Email Validation</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-forgotpassword">
                                <a href="#endpoints-GETapi-forgotpassword">Forgot Password</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-language_list">
                                <a href="#endpoints-GETapi-language_list">GET api/language_list</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-currency_list">
                                <a href="#endpoints-GETapi-currency_list">GET api/currency_list</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-common_data">
                                <a href="#endpoints-GETapi-common_data">Get Common Data</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-get_payment_list">
                                <a href="#endpoints-POSTapi-get_payment_list">Get Payment List</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-logout">
                                <a href="#endpoints-GETapi-logout">GET api/logout</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-language">
                                <a href="#endpoints-GETapi-language">GET api/language</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-update_device">
                                <a href="#endpoints-GETapi-update_device">Updat Device ID and Device Type</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-updatelocation">
                                <a href="#endpoints-GETapi-updatelocation">Update Location of Driver & calculate the trip distance while trip</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-check_status">
                                <a href="#endpoints-GETapi-check_status">Check the Document status from driver side</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-update_document">
                                <a href="#endpoints-POSTapi-update_document">POST api/update_document</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-country_list">
                                <a href="#endpoints-GETapi-country_list">Display Country List</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-toll_reasons">
                                <a href="#endpoints-GETapi-toll_reasons">GET api/toll_reasons</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-cancel_reasons">
                                <a href="#endpoints-GETapi-cancel_reasons">GET api/cancel_reasons</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-get_referral_details">
                                <a href="#endpoints-GETapi-get_referral_details">To Get the referral Users Details</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-get_trip_details">
                                <a href="#endpoints-GETapi-get_trip_details">Get Trip details Of Given trip id. If trip id not passed then returns incomplete trip details</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-send_message">
                                <a href="#endpoints-GETapi-send_message">Send Message to the User</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-get_nearest_vehicles">
                                <a href="#endpoints-GETapi-get_nearest_vehicles">Get Nearest Vehicles</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-search_cars">
                                <a href="#endpoints-GETapi-search_cars">Rider Request to Search Cars</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-request_cars">
                                <a href="#endpoints-POSTapi-request_cars">Ride Request from Rider</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-track_driver">
                                <a href="#endpoints-GETapi-track_driver">Track the Driver Location</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-updateriderlocation">
                                <a href="#endpoints-GETapi-updateriderlocation">Update Location of Rider</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-promo_details">
                                <a href="#endpoints-GETapi-promo_details">Display the promo details</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-sos">
                                <a href="#endpoints-GETapi-sos">Display the SOS details</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-sosalert">
                                <a href="#endpoints-GETapi-sosalert">SOS alert Message to Admin and Rider Added Mobile numbers</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-save_schedule_ride">
                                <a href="#endpoints-POSTapi-save_schedule_ride">Save Schedule Ride</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-schedule_ride_cancel">
                                <a href="#endpoints-GETapi-schedule_ride_cancel">Cancel Saved Schedule Ride</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-add_wallet">
                                <a href="#endpoints-POSTapi-add_wallet">POST api/add_wallet</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-after_payment">
                                <a href="#endpoints-POSTapi-after_payment">POST api/after_payment</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-get_past_trips">
                                <a href="#endpoints-GETapi-get_past_trips">Display the Past Trips of Rider</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-get_upcoming_trips">
                                <a href="#endpoints-GETapi-get_upcoming_trips">Display the Upcoming Trips of Rider</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-currency_conversion">
                                <a href="#endpoints-GETapi-currency_conversion">GET api/currency_conversion</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-start_schedule_trip">
                                <a href="#endpoints-POSTapi-start_schedule_trip">POST api/start_schedule_trip</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-get_pending_trips">
                                <a href="#endpoints-GETapi-get_pending_trips">Display the Pending Trips For the Driver</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-get_completed_trips">
                                <a href="#endpoints-GETapi-get_completed_trips">Display the Completed Trips</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-arive_now">
                                <a href="#endpoints-GETapi-arive_now">Display the Arrive Now Status</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-begin_trip">
                                <a href="#endpoints-GETapi-begin_trip">Begin Trip From Driver</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-accept_request">
                                <a href="#endpoints-GETapi-accept_request">Accept the Trip Request</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-cash_collected">
                                <a href="#endpoints-GETapi-cash_collected">GET api/cash_collected</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-map_upload">
                                <a href="#endpoints-GETapi-map_upload">Map Image upload</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-end_trip">
                                <a href="#endpoints-GETapi-end_trip">End Trip From Driver</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-upload_profile_image">
                                <a href="#endpoints-GETapi-upload_profile_image">User Profile photo upload</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-heat_map">
                                <a href="#endpoints-GETapi-heat_map">Send data for heat map</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-pay_to_admin">
                                <a href="#endpoints-POSTapi-pay_to_admin">POST api/pay_to_admin</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-cancel_trip">
                                <a href="#endpoints-GETapi-cancel_trip">Trip Cancel by Driver or Rider</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-earning_chart">
                                <a href="#endpoints-GETapi-earning_chart">Display the Earning chart details in Driver</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-add_promo_code">
                                <a href="#endpoints-GETapi-add_promo_code">GET api/add_promo_code</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-driver_rating">
                                <a href="#endpoints-GETapi-driver_rating">Display the Diver rating</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-rider_feedback">
                                <a href="#endpoints-GETapi-rider_feedback">Display the Rider Feedback</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-trip_rating">
                                <a href="#endpoints-GETapi-trip_rating">Update the trip Rating given by Driver or Rider</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-get_invoice">
                                <a href="#endpoints-GETapi-get_invoice">Get The Invoice of the given Trip id</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-get_rider_profile">
                                <a href="#endpoints-GETapi-get_rider_profile">Display the Rider profile details & get the trip information while app closed</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-update_rider_profile">
                                <a href="#endpoints-GETapi-update_rider_profile">Update Rider Profile</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-get_driver_profile">
                                <a href="#endpoints-GETapi-get_driver_profile">Display Driver  Profile</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-update_driver_profile">
                                <a href="#endpoints-GETapi-update_driver_profile">Update Driver  Profile</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-update_vehicle_details">
                                <a href="#endpoints-GETapi-update_vehicle_details">Display the vehicle details</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-vehicle_details">
                                <a href="#endpoints-GETapi-vehicle_details">Display the vehicle details</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-update_rider_location">
                                <a href="#endpoints-GETapi-update_rider_location">Update the location of Rider</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-update_user_currency">
                                <a href="#endpoints-GETapi-update_user_currency">To update the currency code for the user</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-get_caller_detail">
                                <a href="#endpoints-GETapi-get_caller_detail">GET api/get_caller_detail</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-vehicle_descriptions">
                                <a href="#endpoints-GETapi-vehicle_descriptions">GET api/vehicle_descriptions</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-add_card_details">
                                <a href="#endpoints-GETapi-add_card_details">API for create a customer id  based on card details using stripe payment gateway</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-get_card_details">
                                <a href="#endpoints-GETapi-get_card_details">API for payment card details</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-stripe_supported_country_list">
                                <a href="#endpoints-GETapi-stripe_supported_country_list">Display Country List</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-update_payout_preference">
                                <a href="#endpoints-POSTapi-update_payout_preference">Add payout Preferences</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-get_payout_list">
                                <a href="#endpoints-GETapi-get_payout_list">Get payout Preferences</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-earning_list">
                                <a href="#endpoints-GETapi-earning_list">View Over All Payout Details of driver</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-weekly_trip">
                                <a href="#endpoints-GETapi-weekly_trip">View Weekly Payout Details of Driver</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-weekly_statement">
                                <a href="#endpoints-GETapi-weekly_statement">View Week Day Payout Details of Driver</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-daily_statement">
                                <a href="#endpoints-GETapi-daily_statement">View Daily Payout Details of Driver</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-update_vehicle">
                                <a href="#endpoints-POSTapi-update_vehicle">POST api/update_vehicle</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-delete_vehicle">
                                <a href="#endpoints-POSTapi-delete_vehicle">POST api/delete_vehicle</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-update_default_vehicle">
                                <a href="#endpoints-GETapi-update_default_vehicle">GET api/update_default_vehicle</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: July 19, 2024</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://rideinjune.test</code>
</aside>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-POSTapi-web_payment">POST api/web_payment</h2>

<p>
</p>



<span id="example-requests-POSTapi-web_payment">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/web_payment';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://rideinjune.test/api/web_payment" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/web_payment"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-web_payment">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 119
access-control-allow-origin: *
set-cookie: laravel_session=g0Jd5iIYJtyR65PYpe9YqnypoJDhorw9qgholnvY; expires=Fri, 19 Jul 2024 14:46:22 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-web_payment" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-web_payment"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-web_payment"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-web_payment" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-web_payment">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-web_payment" data-method="POST"
      data-path="api/web_payment"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-web_payment', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-web_payment"
                    onclick="tryItOut('POSTapi-web_payment');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-web_payment"
                    onclick="cancelTryOut('POSTapi-web_payment');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-web_payment"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/web_payment</code></b>
        </p>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/web_payment</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-web_payment"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-web_payment"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-payment-success">POST api/payment/success</h2>

<p>
</p>



<span id="example-requests-POSTapi-payment-success">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/payment/success';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://rideinjune.test/api/payment/success" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/payment/success"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-payment-success">
</span>
<span id="execution-results-POSTapi-payment-success" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-payment-success"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-payment-success"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-payment-success" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-payment-success">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-payment-success" data-method="POST"
      data-path="api/payment/success"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-payment-success', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-payment-success"
                    onclick="tryItOut('POSTapi-payment-success');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-payment-success"
                    onclick="cancelTryOut('POSTapi-payment-success');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-payment-success"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/payment/success</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-payment-success"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-payment-success"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-payment-verify">POST api/payment/verify</h2>

<p>
</p>



<span id="example-requests-POSTapi-payment-verify">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/payment/verify';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://rideinjune.test/api/payment/verify" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/payment/verify"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-payment-verify">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 118
access-control-allow-origin: *
set-cookie: laravel_session=AnbwwDbQBtN6fr1hOLckgzjXwVpefxCS8mQVCInL; expires=Fri, 19 Jul 2024 14:46:22 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-payment-verify" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-payment-verify"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-payment-verify"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-payment-verify" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-payment-verify">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-payment-verify" data-method="POST"
      data-path="api/payment/verify"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-payment-verify', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-payment-verify"
                    onclick="tryItOut('POSTapi-payment-verify');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-payment-verify"
                    onclick="cancelTryOut('POSTapi-payment-verify');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-payment-verify"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/payment/verify</code></b>
        </p>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/payment/verify</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-payment-verify"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-payment-verify"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-payment-cancel">GET api/payment/cancel</h2>

<p>
</p>



<span id="example-requests-GETapi-payment-cancel">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/payment/cancel';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/payment/cancel" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/payment/cancel"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-payment-cancel">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
x-ratelimit-limit: 120
x-ratelimit-remaining: 117
access-control-allow-origin: *
set-cookie: laravel_session=aC34mrbqy0Hf0gVO9q2NBfZWFGWIzd99rGcEEgoE; expires=Fri, 19 Jul 2024 14:46:22 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;div style=&quot;display: none&quot; id=&quot;data&quot;&gt;
	{&quot;status_code&quot;:&quot;0&quot;,&quot;message&quot;:&quot;Payment failed&quot;}
&lt;/div&gt;</code>
 </pre>
    </span>
<span id="execution-results-GETapi-payment-cancel" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-payment-cancel"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-payment-cancel"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-payment-cancel" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-payment-cancel">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-payment-cancel" data-method="GET"
      data-path="api/payment/cancel"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-payment-cancel', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-payment-cancel"
                    onclick="tryItOut('GETapi-payment-cancel');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-payment-cancel"
                    onclick="cancelTryOut('GETapi-payment-cancel');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-payment-cancel"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/payment/cancel</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-payment-cancel"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-payment-cancel"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-cron_request_car">Cron request to cars for scheduled ride</h2>

<p>
</p>



<span id="example-requests-GETapi-cron_request_car">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/cron_request_car';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/cron_request_car" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/cron_request_car"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-cron_request_car">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
x-ratelimit-limit: 120
x-ratelimit-remaining: 116
access-control-allow-origin: *
set-cookie: laravel_session=JRSdI9dOgy6gBEy1wW8H07aRBflYqKDl1eDbokyw; expires=Fri, 19 Jul 2024 14:46:22 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
    </span>
<span id="execution-results-GETapi-cron_request_car" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-cron_request_car"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-cron_request_car"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-cron_request_car" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-cron_request_car">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-cron_request_car" data-method="GET"
      data-path="api/cron_request_car"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-cron_request_car', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-cron_request_car"
                    onclick="tryItOut('GETapi-cron_request_car');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-cron_request_car"
                    onclick="cancelTryOut('GETapi-cron_request_car');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-cron_request_car"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/cron_request_car</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-cron_request_car"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-cron_request_car"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-cron_offline">Update User Offline status</h2>

<p>
</p>



<span id="example-requests-GETapi-cron_offline">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/cron_offline';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/cron_offline" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/cron_offline"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-cron_offline">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 115
access-control-allow-origin: *
set-cookie: laravel_session=qUwi1NFax4OGVngSmbvUTouaR5tUfb36zVRECJEL; expires=Fri, 19 Jul 2024 14:46:22 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;status_message&quot;: &quot;updated successfully&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-cron_offline" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-cron_offline"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-cron_offline"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-cron_offline" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-cron_offline">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-cron_offline" data-method="GET"
      data-path="api/cron_offline"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-cron_offline', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-cron_offline"
                    onclick="tryItOut('GETapi-cron_offline');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-cron_offline"
                    onclick="cancelTryOut('GETapi-cron_offline');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-cron_offline"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/cron_offline</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-cron_offline"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-cron_offline"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-currency_cron">Update Currency rate</h2>

<p>
</p>



<span id="example-requests-GETapi-currency_cron">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/currency_cron';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/currency_cron" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/currency_cron"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-currency_cron">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 114
access-control-allow-origin: *
set-cookie: laravel_session=kzToBAvWPWdNm8jemwqDq55rJx0yqYkABaJWYtv2; expires=Fri, 19 Jul 2024 14:46:24 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;AED&quot;,
        &quot;value&quot;: 3.672985
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;AFN&quot;,
        &quot;value&quot;: 70.665277
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;ALL&quot;,
        &quot;value&quot;: 92.120197
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;AMD&quot;,
        &quot;value&quot;: 387.860145
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;ANG&quot;,
        &quot;value&quot;: 1.801625
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;AOA&quot;,
        &quot;value&quot;: 872.635
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;ARS&quot;,
        &quot;value&quot;: 924.7203
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;AUD&quot;,
        &quot;value&quot;: 1.493607
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;AWG&quot;,
        &quot;value&quot;: 1.8
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;AZN&quot;,
        &quot;value&quot;: 1.7
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;BAM&quot;,
        &quot;value&quot;: 1.796298
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;BBD&quot;,
        &quot;value&quot;: 2
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;BDT&quot;,
        &quot;value&quot;: 117.460121
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;BGN&quot;,
        &quot;value&quot;: 1.796246
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;BHD&quot;,
        &quot;value&quot;: 0.376936
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;BIF&quot;,
        &quot;value&quot;: 2879.245441
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;BMD&quot;,
        &quot;value&quot;: 1
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;BND&quot;,
        &quot;value&quot;: 1.344698
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;BOB&quot;,
        &quot;value&quot;: 6.907636
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;BRL&quot;,
        &quot;value&quot;: 5.5445
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;BSD&quot;,
        &quot;value&quot;: 1
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;BTC&quot;,
        &quot;value&quot;: 1.5601358e-5
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;BTN&quot;,
        &quot;value&quot;: 83.632269
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;BWP&quot;,
        &quot;value&quot;: 13.536984
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;BYN&quot;,
        &quot;value&quot;: 3.271507
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;BZD&quot;,
        &quot;value&quot;: 2.01498
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;CAD&quot;,
        &quot;value&quot;: 1.371215
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;CDF&quot;,
        &quot;value&quot;: 2841.054324
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;CHF&quot;,
        &quot;value&quot;: 0.889149
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;CLF&quot;,
        &quot;value&quot;: 0.033834
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;CLP&quot;,
        &quot;value&quot;: 933.59
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;CNH&quot;,
        &quot;value&quot;: 7.281515
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;CNY&quot;,
        &quot;value&quot;: 7.2694
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;COP&quot;,
        &quot;value&quot;: 4045.582822
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;CRC&quot;,
        &quot;value&quot;: 524.524669
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;CUC&quot;,
        &quot;value&quot;: 1
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;CUP&quot;,
        &quot;value&quot;: 25.75
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;CVE&quot;,
        &quot;value&quot;: 101.228325
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;CZK&quot;,
        &quot;value&quot;: 23.183
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;DJF&quot;,
        &quot;value&quot;: 177.985807
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;DKK&quot;,
        &quot;value&quot;: 6.849199
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;DOP&quot;,
        &quot;value&quot;: 59.184694
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;DZD&quot;,
        &quot;value&quot;: 134.601
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;EGP&quot;,
        &quot;value&quot;: 48.249367
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;ERN&quot;,
        &quot;value&quot;: 15
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;ETB&quot;,
        &quot;value&quot;: 57.305737
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;EUR&quot;,
        &quot;value&quot;: 0.917988
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;FJD&quot;,
        &quot;value&quot;: 2.2357
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;FKP&quot;,
        &quot;value&quot;: 0.773554
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;GBP&quot;,
        &quot;value&quot;: 0.773554
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;GEL&quot;,
        &quot;value&quot;: 2.715
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;GGP&quot;,
        &quot;value&quot;: 0.773554
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;GHS&quot;,
        &quot;value&quot;: 15.424391
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;GIP&quot;,
        &quot;value&quot;: 0.773554
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;GMD&quot;,
        &quot;value&quot;: 67.8
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;GNF&quot;,
        &quot;value&quot;: 8646.302208
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;GTQ&quot;,
        &quot;value&quot;: 7.767302
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;GYD&quot;,
        &quot;value&quot;: 209.139417
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;HKD&quot;,
        &quot;value&quot;: 7.809835
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;HNL&quot;,
        &quot;value&quot;: 24.758564
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;HRK&quot;,
        &quot;value&quot;: 6.917922
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;HTG&quot;,
        &quot;value&quot;: 131.953221
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;HUF&quot;,
        &quot;value&quot;: 358.711589
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;IDR&quot;,
        &quot;value&quot;: 16196.887781
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;ILS&quot;,
        &quot;value&quot;: 3.655572
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;IMP&quot;,
        &quot;value&quot;: 0.773554
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;INR&quot;,
        &quot;value&quot;: 83.664131
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;IQD&quot;,
        &quot;value&quot;: 1309.522101
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;IRR&quot;,
        &quot;value&quot;: 42087.5
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;ISK&quot;,
        &quot;value&quot;: 137.24
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;JEP&quot;,
        &quot;value&quot;: 0.773554
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;JMD&quot;,
        &quot;value&quot;: 156.218629
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;JOD&quot;,
        &quot;value&quot;: 0.7086
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;JPY&quot;,
        &quot;value&quot;: 157.47806818
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;KES&quot;,
        &quot;value&quot;: 131.25
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;KGS&quot;,
        &quot;value&quot;: 84.6427
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;KHR&quot;,
        &quot;value&quot;: 4107.303915
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;KMF&quot;,
        &quot;value&quot;: 450.550173
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;KPW&quot;,
        &quot;value&quot;: 900
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;KRW&quot;,
        &quot;value&quot;: 1387.696325
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;KWD&quot;,
        &quot;value&quot;: 0.305733
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;KYD&quot;,
        &quot;value&quot;: 0.833031
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;KZT&quot;,
        &quot;value&quot;: 476.269782
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;LAK&quot;,
        &quot;value&quot;: 22167.778675
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;LBP&quot;,
        &quot;value&quot;: 89502.541514
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;LKR&quot;,
        &quot;value&quot;: 303.500682
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;LRD&quot;,
        &quot;value&quot;: 195.08723
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;LSL&quot;,
        &quot;value&quot;: 18.335866
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;LYD&quot;,
        &quot;value&quot;: 4.848156
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;MAD&quot;,
        &quot;value&quot;: 9.850064
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;MDL&quot;,
        &quot;value&quot;: 17.693873
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;MGA&quot;,
        &quot;value&quot;: 4503.094735
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;MKD&quot;,
        &quot;value&quot;: 56.48019
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;MMK&quot;,
        &quot;value&quot;: 3247
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;MNT&quot;,
        &quot;value&quot;: 3450
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;MOP&quot;,
        &quot;value&quot;: 8.040632
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;MRU&quot;,
        &quot;value&quot;: 39.446361
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;MUR&quot;,
        &quot;value&quot;: 46.670003
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;MVR&quot;,
        &quot;value&quot;: 15.405
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;MWK&quot;,
        &quot;value&quot;: 1733.382262
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;MXN&quot;,
        &quot;value&quot;: 17.919867
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;MYR&quot;,
        &quot;value&quot;: 4.6765
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;MZN&quot;,
        &quot;value&quot;: 63.850001
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;NAD&quot;,
        &quot;value&quot;: 18.335866
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;NGN&quot;,
        &quot;value&quot;: 1629.84
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;NIO&quot;,
        &quot;value&quot;: 36.792969
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;NOK&quot;,
        &quot;value&quot;: 10.850415
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;NPR&quot;,
        &quot;value&quot;: 133.811248
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;NZD&quot;,
        &quot;value&quot;: 1.659708
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;OMR&quot;,
        &quot;value&quot;: 0.38497
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;PAB&quot;,
        &quot;value&quot;: 1
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;PEN&quot;,
        &quot;value&quot;: 3.743221
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;PGK&quot;,
        &quot;value&quot;: 3.915338
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;PHP&quot;,
        &quot;value&quot;: 58.361996
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;PKR&quot;,
        &quot;value&quot;: 278.005373
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;PLN&quot;,
        &quot;value&quot;: 3.931995
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;PYG&quot;,
        &quot;value&quot;: 7558.78298
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;QAR&quot;,
        &quot;value&quot;: 3.648437
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;RON&quot;,
        &quot;value&quot;: 4.5637
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;RSD&quot;,
        &quot;value&quot;: 107.456
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;RUB&quot;,
        &quot;value&quot;: 87.751598
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;RWF&quot;,
        &quot;value&quot;: 1309.798123
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;SAR&quot;,
        &quot;value&quot;: 3.750896
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;SBD&quot;,
        &quot;value&quot;: 8.457605
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;SCR&quot;,
        &quot;value&quot;: 13.560505
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;SDG&quot;,
        &quot;value&quot;: 586
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;SEK&quot;,
        &quot;value&quot;: 10.656383
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;SGD&quot;,
        &quot;value&quot;: 1.344478
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;SHP&quot;,
        &quot;value&quot;: 0.773554
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;SLL&quot;,
        &quot;value&quot;: 20969.5
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;SOS&quot;,
        &quot;value&quot;: 571.273455
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;SRD&quot;,
        &quot;value&quot;: 29.565
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;SSP&quot;,
        &quot;value&quot;: 130.26
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;STD&quot;,
        &quot;value&quot;: 22281.8
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;STN&quot;,
        &quot;value&quot;: 22.50194
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;SVC&quot;,
        &quot;value&quot;: 8.751378
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;SYP&quot;,
        &quot;value&quot;: 2512.53
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;SZL&quot;,
        &quot;value&quot;: 18.33954
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;THB&quot;,
        &quot;value&quot;: 36.26
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;TJS&quot;,
        &quot;value&quot;: 10.631386
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;TMT&quot;,
        &quot;value&quot;: 3.51
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;TND&quot;,
        &quot;value&quot;: 3.099114
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;TOP&quot;,
        &quot;value&quot;: 2.363136
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;TRY&quot;,
        &quot;value&quot;: 33.062136
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;TTD&quot;,
        &quot;value&quot;: 6.789157
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;TWD&quot;,
        &quot;value&quot;: 32.785499
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;TZS&quot;,
        &quot;value&quot;: 2685
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;UAH&quot;,
        &quot;value&quot;: 41.629609
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;UGX&quot;,
        &quot;value&quot;: 3694.017619
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;UYU&quot;,
        &quot;value&quot;: 40.304295
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;UZS&quot;,
        &quot;value&quot;: 12596.309541
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;VES&quot;,
        &quot;value&quot;: 36.526612
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;VND&quot;,
        &quot;value&quot;: 25326.076847
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;VUV&quot;,
        &quot;value&quot;: 118.722
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;WST&quot;,
        &quot;value&quot;: 2.8
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;XAF&quot;,
        &quot;value&quot;: 602.160747
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;XAG&quot;,
        &quot;value&quot;: 0.03438612
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;XAU&quot;,
        &quot;value&quot;: 0.00041494
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;XCD&quot;,
        &quot;value&quot;: 2.70255
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;XDR&quot;,
        &quot;value&quot;: 0.754045
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;XOF&quot;,
        &quot;value&quot;: 602.160747
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;XPD&quot;,
        &quot;value&quot;: 0.00109886
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;XPF&quot;,
        &quot;value&quot;: 109.545124
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;XPT&quot;,
        &quot;value&quot;: 0.00104715
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;YER&quot;,
        &quot;value&quot;: 250.325036
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;ZAR&quot;,
        &quot;value&quot;: 18.329258
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;ZMW&quot;,
        &quot;value&quot;: 25.516282
    },
    {
        &quot;status&quot;: true,
        &quot;status_message&quot;: &quot;updated successfully&quot;,
        &quot;target&quot;: &quot;ZWL&quot;,
        &quot;value&quot;: 322
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-currency_cron" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-currency_cron"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-currency_cron"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-currency_cron" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-currency_cron">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-currency_cron" data-method="GET"
      data-path="api/currency_cron"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-currency_cron', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-currency_cron"
                    onclick="tryItOut('GETapi-currency_cron');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-currency_cron"
                    onclick="cancelTryOut('GETapi-currency_cron');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-currency_cron"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/currency_cron</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-currency_cron"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-currency_cron"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-update_referral_cron">Update Referral Status</h2>

<p>
</p>



<span id="example-requests-GETapi-update_referral_cron">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/update_referral_cron';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/update_referral_cron" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/update_referral_cron"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-update_referral_cron">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 113
access-control-allow-origin: *
set-cookie: laravel_session=dgPAbpXIlPUjjVJqp6VCAXx3H269z74Rd6al5uv7; expires=Fri, 19 Jul 2024 14:46:24 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;status_message&quot;: &quot;updated successfully&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-update_referral_cron" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-update_referral_cron"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-update_referral_cron"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-update_referral_cron" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-update_referral_cron">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-update_referral_cron" data-method="GET"
      data-path="api/update_referral_cron"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-update_referral_cron', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-update_referral_cron"
                    onclick="tryItOut('GETapi-update_referral_cron');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-update_referral_cron"
                    onclick="cancelTryOut('GETapi-update_referral_cron');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-update_referral_cron"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/update_referral_cron</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-update_referral_cron"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-update_referral_cron"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-paypal_payout">Update Paypal Payout Status</h2>

<p>
</p>



<span id="example-requests-GETapi-paypal_payout">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/paypal_payout';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/paypal_payout" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/paypal_payout"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-paypal_payout">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 112
access-control-allow-origin: *
set-cookie: laravel_session=AKatSNOFtLlVSqH8GHewmHPTwpt8rjVQGXrgFy2U; expires=Fri, 19 Jul 2024 14:46:24 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: false,
    &quot;status_message&quot;: &quot;No Pending Payouts found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-paypal_payout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-paypal_payout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-paypal_payout"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-paypal_payout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-paypal_payout">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-paypal_payout" data-method="GET"
      data-path="api/paypal_payout"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-paypal_payout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-paypal_payout"
                    onclick="tryItOut('GETapi-paypal_payout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-paypal_payout"
                    onclick="cancelTryOut('GETapi-paypal_payout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-paypal_payout"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/paypal_payout</code></b>
        </p>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/paypal_payout</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-paypal_payout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-paypal_payout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-check_version">GET api/check_version</h2>

<p>
</p>



<span id="example-requests-GETapi-check_version">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/check_version';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/check_version" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/check_version"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-check_version">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 111
access-control-allow-origin: *
set-cookie: laravel_session=YNjOOTsvhRHjg1Fo84S2xwbV3O8deMy1iUNa10gN; expires=Fri, 19 Jul 2024 14:46:24 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status_code&quot;: &quot;1&quot;,
    &quot;status_message&quot;: &quot;Success&quot;,
    &quot;force_update&quot;: &quot;no_update&quot;,
    &quot;enable_referral&quot;: true,
    &quot;otp_enabled&quot;: false,
    &quot;support&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Whatsapp&quot;,
            &quot;link&quot;: &quot;918607248802&quot;,
            &quot;image&quot;: &quot;http://rideinjune.test/images/support/category-image1684133680.png&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-check_version" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-check_version"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-check_version"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-check_version" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-check_version">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-check_version" data-method="GET"
      data-path="api/check_version"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-check_version', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-check_version"
                    onclick="tryItOut('GETapi-check_version');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-check_version"
                    onclick="cancelTryOut('GETapi-check_version');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-check_version"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/check_version</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-check_version"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-check_version"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-register">User Resister</h2>

<p>
</p>



<span id="example-requests-GETapi-register">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/register';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-register">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 110
access-control-allow-origin: *
set-cookie: laravel_session=R2ZtapmoF684MC78LztaivK1yPbZkthxxmWYejen; expires=Fri, 19 Jul 2024 14:46:24 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status_code&quot;: &quot;0&quot;,
    &quot;status_message&quot;: &quot;The Mobile field is required.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-register"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-register">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-register" data-method="GET"
      data-path="api/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-register"
                    onclick="tryItOut('GETapi-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-register"
                    onclick="cancelTryOut('GETapi-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-register"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-socialsignup">User Socail media Resister &amp; Login</h2>

<p>
</p>



<span id="example-requests-GETapi-socialsignup">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/socialsignup';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'auth_type' =&gt; 'facebook',
            'auth_id' =&gt; 'voluptatem',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/socialsignup" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"auth_type\": \"facebook\",
    \"auth_id\": \"voluptatem\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/socialsignup"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "auth_type": "facebook",
    "auth_id": "voluptatem"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-socialsignup">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 109
access-control-allow-origin: *
set-cookie: laravel_session=CoswBv6npmRLIm7G5AAgZiATzo6VZgoi9o9f3iZL; expires=Fri, 19 Jul 2024 14:46:24 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status_code&quot;: &quot;2&quot;,
    &quot;status_message&quot;: &quot;New User&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-socialsignup" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-socialsignup"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-socialsignup"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-socialsignup" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-socialsignup">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-socialsignup" data-method="GET"
      data-path="api/socialsignup"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-socialsignup', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-socialsignup"
                    onclick="tryItOut('GETapi-socialsignup');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-socialsignup"
                    onclick="cancelTryOut('GETapi-socialsignup');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-socialsignup"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/socialsignup</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-socialsignup"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-socialsignup"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>auth_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="auth_type"                data-endpoint="GETapi-socialsignup"
               value="facebook"
               data-component="body">
    <br>
<p>Example: <code>facebook</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>facebook</code></li> <li><code>google</code></li> <li><code>apple</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>auth_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="auth_id"                data-endpoint="GETapi-socialsignup"
               value="voluptatem"
               data-component="body">
    <br>
<p>Example: <code>voluptatem</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-apple_callback">User Socail media Resister &amp; Login</h2>

<p>
</p>



<span id="example-requests-GETapi-apple_callback">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/apple_callback';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/apple_callback" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/apple_callback"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-apple_callback">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 108
access-control-allow-origin: *
set-cookie: laravel_session=rWR6HU5vyDGiDZ5rzrMLIcplxYYuFbKufqajrxwB; expires=Fri, 19 Jul 2024 14:46:25 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status_code&quot;: &quot;0&quot;,
    &quot;status_message&quot;: &quot;invalid_request&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-apple_callback" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-apple_callback"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-apple_callback"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-apple_callback" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-apple_callback">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-apple_callback" data-method="GET"
      data-path="api/apple_callback"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-apple_callback', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-apple_callback"
                    onclick="tryItOut('GETapi-apple_callback');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-apple_callback"
                    onclick="cancelTryOut('GETapi-apple_callback');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-apple_callback"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/apple_callback</code></b>
        </p>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/apple_callback</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-apple_callback"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-apple_callback"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-login">User Login</h2>

<p>
</p>



<span id="example-requests-GETapi-login">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/login';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'mobile_number' =&gt; 'xdxcsrfcyfzdktdrepugvrsjundafgfqhuqqlntdazvkbadvggshetovushalwsgu',
            'user_type' =&gt; 'driver',
            'password' =&gt; 'perspiciatis',
            'country_code' =&gt; 'quisquam',
            'device_type' =&gt; 'necessitatibus',
            'device_id' =&gt; 'cum',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"mobile_number\": \"xdxcsrfcyfzdktdrepugvrsjundafgfqhuqqlntdazvkbadvggshetovushalwsgu\",
    \"user_type\": \"driver\",
    \"password\": \"perspiciatis\",
    \"country_code\": \"quisquam\",
    \"device_type\": \"necessitatibus\",
    \"device_id\": \"cum\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "mobile_number": "xdxcsrfcyfzdktdrepugvrsjundafgfqhuqqlntdazvkbadvggshetovushalwsgu",
    "user_type": "driver",
    "password": "perspiciatis",
    "country_code": "quisquam",
    "device_type": "necessitatibus",
    "device_id": "cum"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-login">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 107
access-control-allow-origin: *
set-cookie: laravel_session=6LsvYzvvZi2RqBMOEwwbYvX4nYWg8hLYL3TcbBW0; expires=Fri, 19 Jul 2024 14:46:26 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status_code&quot;: &quot;0&quot;,
    &quot;status_message&quot;: &quot;The mobile number format is invalid.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-login" data-method="GET"
      data-path="api/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-login"
                    onclick="tryItOut('GETapi-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-login"
                    onclick="cancelTryOut('GETapi-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>mobile_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="mobile_number"                data-endpoint="GETapi-login"
               value="xdxcsrfcyfzdktdrepugvrsjundafgfqhuqqlntdazvkbadvggshetovushalwsgu"
               data-component="body">
    <br>
<p>Must match the regex /^[0-9]+$/. Must be at least 6 characters. Example: <code>xdxcsrfcyfzdktdrepugvrsjundafgfqhuqqlntdazvkbadvggshetovushalwsgu</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="user_type"                data-endpoint="GETapi-login"
               value="driver"
               data-component="body">
    <br>
<p>Example: <code>driver</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>Rider</code></li> <li><code>Driver</code></li> <li><code>rider</code></li> <li><code>driver</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="GETapi-login"
               value="perspiciatis"
               data-component="body">
    <br>
<p>Example: <code>perspiciatis</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country_code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="country_code"                data-endpoint="GETapi-login"
               value="quisquam"
               data-component="body">
    <br>
<p>Example: <code>quisquam</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>device_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="device_type"                data-endpoint="GETapi-login"
               value="necessitatibus"
               data-component="body">
    <br>
<p>Example: <code>necessitatibus</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>device_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="device_id"                data-endpoint="GETapi-login"
               value="cum"
               data-component="body">
    <br>
<p>Example: <code>cum</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-delete-user">POST api/delete-user</h2>

<p>
</p>



<span id="example-requests-POSTapi-delete-user">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/delete-user';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://rideinjune.test/api/delete-user" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/delete-user"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-delete-user">
</span>
<span id="execution-results-POSTapi-delete-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-delete-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-delete-user"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-delete-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-delete-user">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-delete-user" data-method="POST"
      data-path="api/delete-user"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-delete-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-delete-user"
                    onclick="tryItOut('POSTapi-delete-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-delete-user"
                    onclick="cancelTryOut('POSTapi-delete-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-delete-user"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/delete-user</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-delete-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-delete-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-otp_verification">GET api/otp_verification</h2>

<p>
</p>



<span id="example-requests-GETapi-otp_verification">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/otp_verification';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/otp_verification" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/otp_verification"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-otp_verification">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 106
access-control-allow-origin: *
set-cookie: laravel_session=ps8ajTJx1A5wGi4kSIAvpgmhXHao14e5dLvukWjl; expires=Fri, 19 Jul 2024 14:46:26 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status_code&quot;: &quot;1&quot;,
    &quot;message&quot;: &quot;success&quot;,
    &quot;status_message&quot;: &quot;success&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-otp_verification" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-otp_verification"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-otp_verification"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-otp_verification" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-otp_verification">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-otp_verification" data-method="GET"
      data-path="api/otp_verification"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-otp_verification', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-otp_verification"
                    onclick="tryItOut('GETapi-otp_verification');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-otp_verification"
                    onclick="cancelTryOut('GETapi-otp_verification');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-otp_verification"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/otp_verification</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-otp_verification"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-otp_verification"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-numbervalidation">Mobile number verification</h2>

<p>
</p>



<span id="example-requests-GETapi-numbervalidation">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/numbervalidation';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'mobile_number' =&gt; 'apcpudnqjpralexrfoqwhux',
            'user_type' =&gt; 'Driver',
            'country_code' =&gt; 'eum',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/numbervalidation" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"mobile_number\": \"apcpudnqjpralexrfoqwhux\",
    \"user_type\": \"Driver\",
    \"country_code\": \"eum\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/numbervalidation"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "mobile_number": "apcpudnqjpralexrfoqwhux",
    "user_type": "Driver",
    "country_code": "eum"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-numbervalidation">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 105
access-control-allow-origin: *
set-cookie: laravel_session=CyqfuZWgYmsRDxKZJmqOORHA2V05IdbH0yTvzNp0; expires=Fri, 19 Jul 2024 14:46:26 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status_code&quot;: &quot;0&quot;,
    &quot;status_message&quot;: &quot;The mobile number format is invalid.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-numbervalidation" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-numbervalidation"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-numbervalidation"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-numbervalidation" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-numbervalidation">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-numbervalidation" data-method="GET"
      data-path="api/numbervalidation"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-numbervalidation', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-numbervalidation"
                    onclick="tryItOut('GETapi-numbervalidation');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-numbervalidation"
                    onclick="cancelTryOut('GETapi-numbervalidation');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-numbervalidation"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/numbervalidation</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-numbervalidation"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-numbervalidation"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>mobile_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="mobile_number"                data-endpoint="GETapi-numbervalidation"
               value="apcpudnqjpralexrfoqwhux"
               data-component="body">
    <br>
<p>Must match the regex /^[0-9]+$/. Must be at least 6 characters. Example: <code>apcpudnqjpralexrfoqwhux</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="user_type"                data-endpoint="GETapi-numbervalidation"
               value="Driver"
               data-component="body">
    <br>
<p>Example: <code>Driver</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>Rider</code></li> <li><code>Driver</code></li> <li><code>rider</code></li> <li><code>driver</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country_code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="country_code"                data-endpoint="GETapi-numbervalidation"
               value="eum"
               data-component="body">
    <br>
<p>Example: <code>eum</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-emailvalidation">User Email Validation</h2>

<p>
</p>



<span id="example-requests-GETapi-emailvalidation">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/emailvalidation';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'email' =&gt; 'yadira50@example.com',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/emailvalidation" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"yadira50@example.com\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/emailvalidation"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "yadira50@example.com"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-emailvalidation">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 104
access-control-allow-origin: *
set-cookie: laravel_session=xIdPBzxFCHvzNdSl21J2zMHfweSnNV5h9hAYmAyD; expires=Fri, 19 Jul 2024 14:46:26 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-emailvalidation" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-emailvalidation"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-emailvalidation"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-emailvalidation" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-emailvalidation">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-emailvalidation" data-method="GET"
      data-path="api/emailvalidation"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-emailvalidation', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-emailvalidation"
                    onclick="tryItOut('GETapi-emailvalidation');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-emailvalidation"
                    onclick="cancelTryOut('GETapi-emailvalidation');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-emailvalidation"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/emailvalidation</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-emailvalidation"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-emailvalidation"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="GETapi-emailvalidation"
               value="yadira50@example.com"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>yadira50@example.com</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-forgotpassword">Forgot Password</h2>

<p>
</p>



<span id="example-requests-GETapi-forgotpassword">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/forgotpassword';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'mobile_number' =&gt; 'zbnnxfxioasokgzvqsfuzglebumplucacpxfpkuchdndhdpxnexqviy',
            'user_type' =&gt; 'Rider',
            'password' =&gt; 'Y479@)q3F;3?A(O&lt;',
            'country_code' =&gt; 'facilis',
            'device_type' =&gt; 'est',
            'device_id' =&gt; 'sed',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/forgotpassword" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"mobile_number\": \"zbnnxfxioasokgzvqsfuzglebumplucacpxfpkuchdndhdpxnexqviy\",
    \"user_type\": \"Rider\",
    \"password\": \"Y479@)q3F;3?A(O&lt;\",
    \"country_code\": \"facilis\",
    \"device_type\": \"est\",
    \"device_id\": \"sed\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/forgotpassword"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "mobile_number": "zbnnxfxioasokgzvqsfuzglebumplucacpxfpkuchdndhdpxnexqviy",
    "user_type": "Rider",
    "password": "Y479@)q3F;3?A(O&lt;",
    "country_code": "facilis",
    "device_type": "est",
    "device_id": "sed"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-forgotpassword">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 103
access-control-allow-origin: *
set-cookie: laravel_session=LHVsEYeLjX08Z4YYzLzG4iRAcEUCIL1CVPCFBjiS; expires=Fri, 19 Jul 2024 14:46:26 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status_code&quot;: &quot;0&quot;,
    &quot;status_message&quot;: &quot;Mobile Number&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-forgotpassword" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-forgotpassword"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-forgotpassword"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-forgotpassword" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-forgotpassword">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-forgotpassword" data-method="GET"
      data-path="api/forgotpassword"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-forgotpassword', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-forgotpassword"
                    onclick="tryItOut('GETapi-forgotpassword');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-forgotpassword"
                    onclick="cancelTryOut('GETapi-forgotpassword');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-forgotpassword"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/forgotpassword</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-forgotpassword"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-forgotpassword"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>mobile_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="mobile_number"                data-endpoint="GETapi-forgotpassword"
               value="zbnnxfxioasokgzvqsfuzglebumplucacpxfpkuchdndhdpxnexqviy"
               data-component="body">
    <br>
<p>Must match the regex /^[0-9]+$/. Must be at least 6 characters. Example: <code>zbnnxfxioasokgzvqsfuzglebumplucacpxfpkuchdndhdpxnexqviy</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="user_type"                data-endpoint="GETapi-forgotpassword"
               value="Rider"
               data-component="body">
    <br>
<p>Example: <code>Rider</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>Rider</code></li> <li><code>Driver</code></li> <li><code>rider</code></li> <li><code>driver</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="GETapi-forgotpassword"
               value="Y479@)q3F;3?A(O<"
               data-component="body">
    <br>
<p>Must be at least 6 characters. Example: <code>Y479@)q3F;3?A(O&lt;</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country_code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="country_code"                data-endpoint="GETapi-forgotpassword"
               value="facilis"
               data-component="body">
    <br>
<p>Example: <code>facilis</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>device_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="device_type"                data-endpoint="GETapi-forgotpassword"
               value="est"
               data-component="body">
    <br>
<p>Example: <code>est</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>device_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="device_id"                data-endpoint="GETapi-forgotpassword"
               value="sed"
               data-component="body">
    <br>
<p>Example: <code>sed</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-language_list">GET api/language_list</h2>

<p>
</p>



<span id="example-requests-GETapi-language_list">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/language_list';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/language_list" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/language_list"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-language_list">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 102
access-control-allow-origin: *
set-cookie: laravel_session=e5mmkmYLEJ2AEivllFIPrM8z6gk6tANkL5M1HLyJ; expires=Fri, 19 Jul 2024 14:46:26 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status_code&quot;: &quot;1&quot;,
    &quot;status_message&quot;: &quot;Successfully&quot;,
    &quot;language_list&quot;: [
        &quot;en&quot;,
        &quot;es&quot;,
        &quot;pt&quot;,
        &quot;fr&quot;,
        &quot;ar&quot;,
        &quot;hi&quot;
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-language_list" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-language_list"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-language_list"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-language_list" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-language_list">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-language_list" data-method="GET"
      data-path="api/language_list"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-language_list', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-language_list"
                    onclick="tryItOut('GETapi-language_list');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-language_list"
                    onclick="cancelTryOut('GETapi-language_list');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-language_list"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/language_list</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-language_list"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-language_list"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-currency_list">GET api/currency_list</h2>

<p>
</p>



<span id="example-requests-GETapi-currency_list">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/currency_list';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/currency_list" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/currency_list"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-currency_list">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 101
access-control-allow-origin: *
set-cookie: laravel_session=7p76yzQoMXgy7bNFYc8vjwrnfSigXNfJuKo5WYLd; expires=Fri, 19 Jul 2024 14:46:26 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status_message&quot;: &quot;Currency Details Listed Successfully&quot;,
    &quot;status_code&quot;: &quot;1&quot;,
    &quot;currency_list&quot;: [
        {
            &quot;code&quot;: &quot;+256&quot;,
            &quot;symbol&quot;: &quot;SHS&quot;
        },
        {
            &quot;code&quot;: &quot;259&quot;,
            &quot;symbol&quot;: &quot;$&quot;
        },
        {
            &quot;code&quot;: &quot;32&quot;,
            &quot;symbol&quot;: &quot;SRD&quot;
        },
        {
            &quot;code&quot;: &quot;334&quot;,
            &quot;symbol&quot;: &quot;kz&quot;
        },
        {
            &quot;code&quot;: &quot;929&quot;,
            &quot;symbol&quot;: &quot;MRU&quot;
        },
        {
            &quot;code&quot;: &quot;ARS&quot;,
            &quot;symbol&quot;: &quot;$&quot;
        },
        {
            &quot;code&quot;: &quot;AUD&quot;,
            &quot;symbol&quot;: &quot;$&quot;
        },
        {
            &quot;code&quot;: &quot;BDT&quot;,
            &quot;symbol&quot;: &quot;৳&quot;
        },
        {
            &quot;code&quot;: &quot;BRL&quot;,
            &quot;symbol&quot;: &quot;R$&quot;
        },
        {
            &quot;code&quot;: &quot;CAD&quot;,
            &quot;symbol&quot;: &quot;$&quot;
        },
        {
            &quot;code&quot;: &quot;CFA&quot;,
            &quot;symbol&quot;: &quot;XOF&quot;
        },
        {
            &quot;code&quot;: &quot;CHF&quot;,
            &quot;symbol&quot;: &quot;&euro;&quot;
        },
        {
            &quot;code&quot;: &quot;CNY&quot;,
            &quot;symbol&quot;: &quot;&yen;&quot;
        },
        {
            &quot;code&quot;: &quot;CZK&quot;,
            &quot;symbol&quot;: &quot;Kč&quot;
        },
        {
            &quot;code&quot;: &quot;DKK&quot;,
            &quot;symbol&quot;: &quot;kr&quot;
        },
        {
            &quot;code&quot;: &quot;DOP&quot;,
            &quot;symbol&quot;: &quot;RD$&quot;
        },
        {
            &quot;code&quot;: &quot;EGY&quot;,
            &quot;symbol&quot;: &quot;EGY&quot;
        },
        {
            &quot;code&quot;: &quot;ETB&quot;,
            &quot;symbol&quot;: &quot;Etb&quot;
        },
        {
            &quot;code&quot;: &quot;EUR&quot;,
            &quot;symbol&quot;: &quot;&euro;&quot;
        },
        {
            &quot;code&quot;: &quot;GBP&quot;,
            &quot;symbol&quot;: &quot;&pound;&quot;
        },
        {
            &quot;code&quot;: &quot;Gh&quot;,
            &quot;symbol&quot;: &quot;GH₵&quot;
        },
        {
            &quot;code&quot;: &quot;HKD&quot;,
            &quot;symbol&quot;: &quot;$&quot;
        },
        {
            &quot;code&quot;: &quot;HUF&quot;,
            &quot;symbol&quot;: &quot;Ft&quot;
        },
        {
            &quot;code&quot;: &quot;IDR&quot;,
            &quot;symbol&quot;: &quot;Rp&quot;
        },
        {
            &quot;code&quot;: &quot;ILS&quot;,
            &quot;symbol&quot;: &quot;₪&quot;
        },
        {
            &quot;code&quot;: &quot;INR&quot;,
            &quot;symbol&quot;: &quot;₹&quot;
        },
        {
            &quot;code&quot;: &quot;IQD&quot;,
            &quot;symbol&quot;: &quot;IQD&quot;
        },
        {
            &quot;code&quot;: &quot;JPY&quot;,
            &quot;symbol&quot;: &quot;&yen;&quot;
        },
        {
            &quot;code&quot;: &quot;KE&quot;,
            &quot;symbol&quot;: &quot;KE&quot;
        },
        {
            &quot;code&quot;: &quot;Kes&quot;,
            &quot;symbol&quot;: &quot;Ksh&quot;
        },
        {
            &quot;code&quot;: &quot;KRW&quot;,
            &quot;symbol&quot;: &quot;₩&quot;
        },
        {
            &quot;code&quot;: &quot;KZT&quot;,
            &quot;symbol&quot;: &quot;KZT&quot;
        },
        {
            &quot;code&quot;: &quot;MXN&quot;,
            &quot;symbol&quot;: &quot;$&quot;
        },
        {
            &quot;code&quot;: &quot;NGN&quot;,
            &quot;symbol&quot;: &quot;₦&quot;
        },
        {
            &quot;code&quot;: &quot;NOK&quot;,
            &quot;symbol&quot;: &quot;kr&quot;
        },
        {
            &quot;code&quot;: &quot;NZD&quot;,
            &quot;symbol&quot;: &quot;$&quot;
        },
        {
            &quot;code&quot;: &quot;PEN&quot;,
            &quot;symbol&quot;: &quot;S/&quot;
        },
        {
            &quot;code&quot;: &quot;PHP&quot;,
            &quot;symbol&quot;: &quot;P&quot;
        },
        {
            &quot;code&quot;: &quot;PKR&quot;,
            &quot;symbol&quot;: &quot;Rs&quot;
        },
        {
            &quot;code&quot;: &quot;PLN&quot;,
            &quot;symbol&quot;: &quot;zł&quot;
        },
        {
            &quot;code&quot;: &quot;rs&quot;,
            &quot;symbol&quot;: &quot;Rd&quot;
        },
        {
            &quot;code&quot;: &quot;RSD&quot;,
            &quot;symbol&quot;: &quot;din&quot;
        },
        {
            &quot;code&quot;: &quot;RUB&quot;,
            &quot;symbol&quot;: &quot;p&quot;
        },
        {
            &quot;code&quot;: &quot;SAR&quot;,
            &quot;symbol&quot;: &quot;SR&quot;
        },
        {
            &quot;code&quot;: &quot;SEK&quot;,
            &quot;symbol&quot;: &quot;kr&quot;
        },
        {
            &quot;code&quot;: &quot;SGD&quot;,
            &quot;symbol&quot;: &quot;$&quot;
        },
        {
            &quot;code&quot;: &quot;SOS&quot;,
            &quot;symbol&quot;: &quot;S&quot;
        },
        {
            &quot;code&quot;: &quot;THB&quot;,
            &quot;symbol&quot;: &quot;฿&quot;
        },
        {
            &quot;code&quot;: &quot;TRY&quot;,
            &quot;symbol&quot;: &quot;₺&quot;
        },
        {
            &quot;code&quot;: &quot;TSh&quot;,
            &quot;symbol&quot;: &quot;Tah&quot;
        },
        {
            &quot;code&quot;: &quot;TWD&quot;,
            &quot;symbol&quot;: &quot;$&quot;
        },
        {
            &quot;code&quot;: &quot;USD&quot;,
            &quot;symbol&quot;: &quot;$&quot;
        },
        {
            &quot;code&quot;: &quot;VND&quot;,
            &quot;symbol&quot;: &quot;₫&quot;
        },
        {
            &quot;code&quot;: &quot;ZAR&quot;,
            &quot;symbol&quot;: &quot;R&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-currency_list" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-currency_list"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-currency_list"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-currency_list" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-currency_list">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-currency_list" data-method="GET"
      data-path="api/currency_list"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-currency_list', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-currency_list"
                    onclick="tryItOut('GETapi-currency_list');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-currency_list"
                    onclick="cancelTryOut('GETapi-currency_list');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-currency_list"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/currency_list</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-currency_list"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-currency_list"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-common_data">Get Common Data</h2>

<p>
</p>



<span id="example-requests-GETapi-common_data">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/common_data';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/common_data" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/common_data"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-common_data">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 100
access-control-allow-origin: *
set-cookie: laravel_session=aZnihG0kTqFqqAZDX0MHOBQEnc9kKzItDGWymqEN; expires=Fri, 19 Jul 2024 14:46:26 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-common_data" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-common_data"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-common_data"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-common_data" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-common_data">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-common_data" data-method="GET"
      data-path="api/common_data"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-common_data', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-common_data"
                    onclick="tryItOut('GETapi-common_data');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-common_data"
                    onclick="cancelTryOut('GETapi-common_data');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-common_data"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/common_data</code></b>
        </p>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/common_data</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-common_data"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-common_data"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-get_payment_list">Get Payment List</h2>

<p>
</p>



<span id="example-requests-POSTapi-get_payment_list">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/get_payment_list';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://rideinjune.test/api/get_payment_list" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/get_payment_list"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-get_payment_list">
</span>
<span id="execution-results-POSTapi-get_payment_list" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-get_payment_list"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-get_payment_list"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-get_payment_list" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-get_payment_list">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-get_payment_list" data-method="POST"
      data-path="api/get_payment_list"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-get_payment_list', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-get_payment_list"
                    onclick="tryItOut('POSTapi-get_payment_list');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-get_payment_list"
                    onclick="cancelTryOut('POSTapi-get_payment_list');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-get_payment_list"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/get_payment_list</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-get_payment_list"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-get_payment_list"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-logout">GET api/logout</h2>

<p>
</p>



<span id="example-requests-GETapi-logout">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/logout';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/logout" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/logout"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-logout">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 99
access-control-allow-origin: *
set-cookie: laravel_session=E91zZvUxh6YUJBBcAeALOwldN8wTRTvo5ggUS4Gq; expires=Fri, 19 Jul 2024 14:46:26 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-logout"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-logout">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-logout" data-method="GET"
      data-path="api/logout"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-logout"
                    onclick="tryItOut('GETapi-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-logout"
                    onclick="cancelTryOut('GETapi-logout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-logout"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/logout</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-language">GET api/language</h2>

<p>
</p>



<span id="example-requests-GETapi-language">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/language';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/language" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/language"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-language">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 98
access-control-allow-origin: *
set-cookie: laravel_session=82Y29AZiPLqwc1FAHVJF27EeI7TCGk4rFzJ9n7W0; expires=Fri, 19 Jul 2024 14:46:26 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-language" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-language"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-language"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-language" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-language">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-language" data-method="GET"
      data-path="api/language"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-language', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-language"
                    onclick="tryItOut('GETapi-language');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-language"
                    onclick="cancelTryOut('GETapi-language');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-language"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/language</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-language"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-language"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-update_device">Updat Device ID and Device Type</h2>

<p>
</p>



<span id="example-requests-GETapi-update_device">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/update_device';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'user_type' =&gt; 'Rider',
            'device_type' =&gt; 'qui',
            'device_id' =&gt; 'rem',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/update_device" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"user_type\": \"Rider\",
    \"device_type\": \"qui\",
    \"device_id\": \"rem\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/update_device"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_type": "Rider",
    "device_type": "qui",
    "device_id": "rem"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-update_device">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 97
access-control-allow-origin: *
set-cookie: laravel_session=kwwscdRihfvpgRbKlHwaOyi6ijYlcOrLFFM73JfP; expires=Fri, 19 Jul 2024 14:46:26 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-update_device" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-update_device"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-update_device"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-update_device" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-update_device">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-update_device" data-method="GET"
      data-path="api/update_device"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-update_device', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-update_device"
                    onclick="tryItOut('GETapi-update_device');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-update_device"
                    onclick="cancelTryOut('GETapi-update_device');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-update_device"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/update_device</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-update_device"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-update_device"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="user_type"                data-endpoint="GETapi-update_device"
               value="Rider"
               data-component="body">
    <br>
<p>Example: <code>Rider</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>Rider</code></li> <li><code>Driver</code></li> <li><code>rider</code></li> <li><code>driver</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>device_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="device_type"                data-endpoint="GETapi-update_device"
               value="qui"
               data-component="body">
    <br>
<p>Example: <code>qui</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>device_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="device_id"                data-endpoint="GETapi-update_device"
               value="rem"
               data-component="body">
    <br>
<p>Example: <code>rem</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-updatelocation">Update Location of Driver &amp; calculate the trip distance while trip</h2>

<p>
</p>



<span id="example-requests-GETapi-updatelocation">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/updatelocation';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'latitude' =&gt; 'pariatur',
            'longitude' =&gt; 'ut',
            'user_type' =&gt; 'driver',
            'status' =&gt; 'Online',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/updatelocation" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"latitude\": \"pariatur\",
    \"longitude\": \"ut\",
    \"user_type\": \"driver\",
    \"status\": \"Online\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/updatelocation"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "latitude": "pariatur",
    "longitude": "ut",
    "user_type": "driver",
    "status": "Online"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-updatelocation">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 96
access-control-allow-origin: *
set-cookie: laravel_session=5qui32CKVGoS725k2lrgSecCdWUvHIL3lJ84oVlx; expires=Fri, 19 Jul 2024 14:46:26 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-updatelocation" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-updatelocation"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-updatelocation"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-updatelocation" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-updatelocation">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-updatelocation" data-method="GET"
      data-path="api/updatelocation"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-updatelocation', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-updatelocation"
                    onclick="tryItOut('GETapi-updatelocation');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-updatelocation"
                    onclick="cancelTryOut('GETapi-updatelocation');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-updatelocation"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/updatelocation</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-updatelocation"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-updatelocation"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>latitude</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="latitude"                data-endpoint="GETapi-updatelocation"
               value="pariatur"
               data-component="body">
    <br>
<p>Example: <code>pariatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>longitude</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="longitude"                data-endpoint="GETapi-updatelocation"
               value="ut"
               data-component="body">
    <br>
<p>Example: <code>ut</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="user_type"                data-endpoint="GETapi-updatelocation"
               value="driver"
               data-component="body">
    <br>
<p>Example: <code>driver</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>Driver</code></li> <li><code>driver</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="GETapi-updatelocation"
               value="Online"
               data-component="body">
    <br>
<p>Example: <code>Online</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>Online</code></li> <li><code>Offline</code></li> <li><code>online</code></li> <li><code>offline</code></li> <li><code>Trip</code></li> <li><code>trip</code></li></ul>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-check_status">Check the Document status from driver side</h2>

<p>
</p>



<span id="example-requests-GETapi-check_status">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/check_status';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'user_type' =&gt; 'Rider',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/check_status" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"user_type\": \"Rider\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/check_status"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_type": "Rider"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-check_status">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 95
access-control-allow-origin: *
set-cookie: laravel_session=bJ4ifJfOph1Hj21jdL9nkWOxvy8sWgTFNYUMtDOx; expires=Fri, 19 Jul 2024 14:46:26 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-check_status" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-check_status"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-check_status"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-check_status" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-check_status">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-check_status" data-method="GET"
      data-path="api/check_status"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-check_status', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-check_status"
                    onclick="tryItOut('GETapi-check_status');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-check_status"
                    onclick="cancelTryOut('GETapi-check_status');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-check_status"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/check_status</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-check_status"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-check_status"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="user_type"                data-endpoint="GETapi-check_status"
               value="Rider"
               data-component="body">
    <br>
<p>Example: <code>Rider</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>Driver</code></li> <li><code>driver</code></li> <li><code>Rider</code></li> <li><code>rider</code></li></ul>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-update_document">POST api/update_document</h2>

<p>
</p>



<span id="example-requests-POSTapi-update_document">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/update_document';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'type' =&gt; 'Vehicle',
            'document_id' =&gt; 'fugiat',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://rideinjune.test/api/update_document" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"type\": \"Vehicle\",
    \"document_id\": \"fugiat\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/update_document"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "type": "Vehicle",
    "document_id": "fugiat"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-update_document">
</span>
<span id="execution-results-POSTapi-update_document" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-update_document"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-update_document"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-update_document" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-update_document">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-update_document" data-method="POST"
      data-path="api/update_document"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-update_document', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-update_document"
                    onclick="tryItOut('POSTapi-update_document');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-update_document"
                    onclick="cancelTryOut('POSTapi-update_document');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-update_document"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/update_document</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-update_document"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-update_document"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="type"                data-endpoint="POSTapi-update_document"
               value="Vehicle"
               data-component="body">
    <br>
<p>Example: <code>Vehicle</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>Driver</code></li> <li><code>Vehicle</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>document_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="document_id"                data-endpoint="POSTapi-update_document"
               value="fugiat"
               data-component="body">
    <br>
<p>Example: <code>fugiat</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-country_list">Display Country List</h2>

<p>
</p>



<span id="example-requests-GETapi-country_list">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/country_list';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/country_list" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/country_list"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-country_list">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 94
access-control-allow-origin: *
set-cookie: laravel_session=ZMPXXFEPbkbTRGFNKu592frXDhRmTE5JRc1U17TL; expires=Fri, 19 Jul 2024 14:46:26 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-country_list" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-country_list"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-country_list"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-country_list" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-country_list">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-country_list" data-method="GET"
      data-path="api/country_list"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-country_list', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-country_list"
                    onclick="tryItOut('GETapi-country_list');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-country_list"
                    onclick="cancelTryOut('GETapi-country_list');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-country_list"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/country_list</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-country_list"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-country_list"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-toll_reasons">GET api/toll_reasons</h2>

<p>
</p>



<span id="example-requests-GETapi-toll_reasons">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/toll_reasons';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/toll_reasons" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/toll_reasons"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-toll_reasons">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 93
access-control-allow-origin: *
set-cookie: laravel_session=89XwdgnRF6aCsv08nQjWjDhCUMHvByv7eEML7XFG; expires=Fri, 19 Jul 2024 14:46:26 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-toll_reasons" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-toll_reasons"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-toll_reasons"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-toll_reasons" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-toll_reasons">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-toll_reasons" data-method="GET"
      data-path="api/toll_reasons"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-toll_reasons', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-toll_reasons"
                    onclick="tryItOut('GETapi-toll_reasons');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-toll_reasons"
                    onclick="cancelTryOut('GETapi-toll_reasons');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-toll_reasons"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/toll_reasons</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-toll_reasons"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-toll_reasons"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-cancel_reasons">GET api/cancel_reasons</h2>

<p>
</p>



<span id="example-requests-GETapi-cancel_reasons">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/cancel_reasons';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/cancel_reasons" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/cancel_reasons"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-cancel_reasons">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 92
access-control-allow-origin: *
set-cookie: laravel_session=DXAHPP2gpkw4gxPfBIeTbpjy8s3iFp4NX16ZPNm0; expires=Fri, 19 Jul 2024 14:46:26 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-cancel_reasons" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-cancel_reasons"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-cancel_reasons"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-cancel_reasons" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-cancel_reasons">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-cancel_reasons" data-method="GET"
      data-path="api/cancel_reasons"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-cancel_reasons', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-cancel_reasons"
                    onclick="tryItOut('GETapi-cancel_reasons');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-cancel_reasons"
                    onclick="cancelTryOut('GETapi-cancel_reasons');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-cancel_reasons"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/cancel_reasons</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-cancel_reasons"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-cancel_reasons"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-get_referral_details">To Get the referral Users Details</h2>

<p>
</p>



<span id="example-requests-GETapi-get_referral_details">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/get_referral_details';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/get_referral_details" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/get_referral_details"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-get_referral_details">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 91
access-control-allow-origin: *
set-cookie: laravel_session=w5LAIVyGaIuLUhvzcQfNcfiQcLtunzlXQZWpuSLA; expires=Fri, 19 Jul 2024 14:46:26 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-get_referral_details" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-get_referral_details"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-get_referral_details"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-get_referral_details" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-get_referral_details">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-get_referral_details" data-method="GET"
      data-path="api/get_referral_details"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-get_referral_details', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-get_referral_details"
                    onclick="tryItOut('GETapi-get_referral_details');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-get_referral_details"
                    onclick="cancelTryOut('GETapi-get_referral_details');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-get_referral_details"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/get_referral_details</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-get_referral_details"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-get_referral_details"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-get_trip_details">Get Trip details Of Given trip id. If trip id not passed then returns incomplete trip details</h2>

<p>
</p>



<span id="example-requests-GETapi-get_trip_details">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/get_trip_details';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/get_trip_details" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/get_trip_details"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-get_trip_details">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 90
access-control-allow-origin: *
set-cookie: laravel_session=14UvDPf9qWpFPMBHpwT15M8uJOqZgoMh6Q6yJgO3; expires=Fri, 19 Jul 2024 14:46:26 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-get_trip_details" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-get_trip_details"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-get_trip_details"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-get_trip_details" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-get_trip_details">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-get_trip_details" data-method="GET"
      data-path="api/get_trip_details"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-get_trip_details', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-get_trip_details"
                    onclick="tryItOut('GETapi-get_trip_details');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-get_trip_details"
                    onclick="cancelTryOut('GETapi-get_trip_details');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-get_trip_details"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/get_trip_details</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-get_trip_details"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-get_trip_details"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>trip_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="trip_id"                data-endpoint="GETapi-get_trip_details"
               value=""
               data-component="body">
    <br>

        </div>
        </form>

                    <h2 id="endpoints-GETapi-send_message">Send Message to the User</h2>

<p>
</p>



<span id="example-requests-GETapi-send_message">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/send_message';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'receiver_id' =&gt; 'alias',
            'message' =&gt; 'ut',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/send_message" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"receiver_id\": \"alias\",
    \"message\": \"ut\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/send_message"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "receiver_id": "alias",
    "message": "ut"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-send_message">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 89
access-control-allow-origin: *
set-cookie: laravel_session=G8QSuKdHY26YBv9gVJDFVuxAnyplcP18WhSpiUjx; expires=Fri, 19 Jul 2024 14:46:26 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-send_message" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-send_message"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-send_message"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-send_message" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-send_message">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-send_message" data-method="GET"
      data-path="api/send_message"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-send_message', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-send_message"
                    onclick="tryItOut('GETapi-send_message');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-send_message"
                    onclick="cancelTryOut('GETapi-send_message');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-send_message"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/send_message</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-send_message"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-send_message"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>receiver_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="receiver_id"                data-endpoint="GETapi-send_message"
               value="alias"
               data-component="body">
    <br>
<p>Example: <code>alias</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>message</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="message"                data-endpoint="GETapi-send_message"
               value="ut"
               data-component="body">
    <br>
<p>Example: <code>ut</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-get_nearest_vehicles">Get Nearest Vehicles</h2>

<p>
</p>



<span id="example-requests-GETapi-get_nearest_vehicles">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/get_nearest_vehicles';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'latitude' =&gt; 'doloribus',
            'longitude' =&gt; 'consequatur',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/get_nearest_vehicles" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"latitude\": \"doloribus\",
    \"longitude\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/get_nearest_vehicles"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "latitude": "doloribus",
    "longitude": "consequatur"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-get_nearest_vehicles">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 88
access-control-allow-origin: *
set-cookie: laravel_session=p8mqW9UYHWMdpRe4DVpsO4UqHzdrt4YbHXiFDwWd; expires=Fri, 19 Jul 2024 14:46:26 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-get_nearest_vehicles" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-get_nearest_vehicles"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-get_nearest_vehicles"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-get_nearest_vehicles" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-get_nearest_vehicles">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-get_nearest_vehicles" data-method="GET"
      data-path="api/get_nearest_vehicles"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-get_nearest_vehicles', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-get_nearest_vehicles"
                    onclick="tryItOut('GETapi-get_nearest_vehicles');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-get_nearest_vehicles"
                    onclick="cancelTryOut('GETapi-get_nearest_vehicles');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-get_nearest_vehicles"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/get_nearest_vehicles</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-get_nearest_vehicles"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-get_nearest_vehicles"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>latitude</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="latitude"                data-endpoint="GETapi-get_nearest_vehicles"
               value="doloribus"
               data-component="body">
    <br>
<p>Example: <code>doloribus</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>longitude</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="longitude"                data-endpoint="GETapi-get_nearest_vehicles"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-search_cars">Rider Request to Search Cars</h2>

<p>
</p>



<span id="example-requests-GETapi-search_cars">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/search_cars';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'pickup_latitude' =&gt; 'corporis',
            'pickup_longitude' =&gt; 'explicabo',
            'drop_latitude' =&gt; 'mollitia',
            'drop_longitude' =&gt; 'nihil',
            'user_type' =&gt; 'rider',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/search_cars" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"pickup_latitude\": \"corporis\",
    \"pickup_longitude\": \"explicabo\",
    \"drop_latitude\": \"mollitia\",
    \"drop_longitude\": \"nihil\",
    \"user_type\": \"rider\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/search_cars"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "pickup_latitude": "corporis",
    "pickup_longitude": "explicabo",
    "drop_latitude": "mollitia",
    "drop_longitude": "nihil",
    "user_type": "rider"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-search_cars">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 87
access-control-allow-origin: *
set-cookie: laravel_session=nGG6rgsltehYgGm7jiM7Kvsyv0o0n1nieS7RW6K9; expires=Fri, 19 Jul 2024 14:46:26 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-search_cars" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-search_cars"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-search_cars"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-search_cars" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-search_cars">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-search_cars" data-method="GET"
      data-path="api/search_cars"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-search_cars', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-search_cars"
                    onclick="tryItOut('GETapi-search_cars');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-search_cars"
                    onclick="cancelTryOut('GETapi-search_cars');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-search_cars"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/search_cars</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-search_cars"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-search_cars"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>pickup_latitude</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="pickup_latitude"                data-endpoint="GETapi-search_cars"
               value="corporis"
               data-component="body">
    <br>
<p>Example: <code>corporis</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>pickup_longitude</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="pickup_longitude"                data-endpoint="GETapi-search_cars"
               value="explicabo"
               data-component="body">
    <br>
<p>Example: <code>explicabo</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>drop_latitude</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="drop_latitude"                data-endpoint="GETapi-search_cars"
               value="mollitia"
               data-component="body">
    <br>
<p>Example: <code>mollitia</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>drop_longitude</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="drop_longitude"                data-endpoint="GETapi-search_cars"
               value="nihil"
               data-component="body">
    <br>
<p>Example: <code>nihil</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="user_type"                data-endpoint="GETapi-search_cars"
               value="rider"
               data-component="body">
    <br>
<p>Example: <code>rider</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>Rider</code></li> <li><code>rider</code></li></ul>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-request_cars">Ride Request from Rider</h2>

<p>
</p>



<span id="example-requests-POSTapi-request_cars">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/request_cars';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://rideinjune.test/api/request_cars" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/request_cars"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-request_cars">
</span>
<span id="execution-results-POSTapi-request_cars" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-request_cars"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-request_cars"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-request_cars" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-request_cars">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-request_cars" data-method="POST"
      data-path="api/request_cars"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-request_cars', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-request_cars"
                    onclick="tryItOut('POSTapi-request_cars');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-request_cars"
                    onclick="cancelTryOut('POSTapi-request_cars');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-request_cars"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/request_cars</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-request_cars"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-request_cars"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-track_driver">Track the Driver Location</h2>

<p>
</p>



<span id="example-requests-GETapi-track_driver">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/track_driver';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'user_type' =&gt; 'adipisci',
            'trip_id' =&gt; 'quia',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/track_driver" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"user_type\": \"adipisci\",
    \"trip_id\": \"quia\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/track_driver"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_type": "adipisci",
    "trip_id": "quia"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-track_driver">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 86
access-control-allow-origin: *
set-cookie: laravel_session=xwz8Hj7poW4ikrp39zZJbCrwW2IxxwKKIrrmzJoW; expires=Fri, 19 Jul 2024 14:46:26 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-track_driver" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-track_driver"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-track_driver"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-track_driver" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-track_driver">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-track_driver" data-method="GET"
      data-path="api/track_driver"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-track_driver', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-track_driver"
                    onclick="tryItOut('GETapi-track_driver');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-track_driver"
                    onclick="cancelTryOut('GETapi-track_driver');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-track_driver"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/track_driver</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-track_driver"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-track_driver"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="user_type"                data-endpoint="GETapi-track_driver"
               value="adipisci"
               data-component="body">
    <br>
<p>Example: <code>adipisci</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>trip_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="trip_id"                data-endpoint="GETapi-track_driver"
               value="quia"
               data-component="body">
    <br>
<p>Example: <code>quia</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-updateriderlocation">Update Location of Rider</h2>

<p>
</p>



<span id="example-requests-GETapi-updateriderlocation">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/updateriderlocation';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'latitude' =&gt; 'veniam',
            'longitude' =&gt; 'a',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/updateriderlocation" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"latitude\": \"veniam\",
    \"longitude\": \"a\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/updateriderlocation"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "latitude": "veniam",
    "longitude": "a"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-updateriderlocation">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 85
access-control-allow-origin: *
set-cookie: laravel_session=9dr6vWovb2wJf2HPiiVigbBJpB6lQSqHA5SwECIR; expires=Fri, 19 Jul 2024 14:46:26 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-updateriderlocation" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-updateriderlocation"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-updateriderlocation"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-updateriderlocation" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-updateriderlocation">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-updateriderlocation" data-method="GET"
      data-path="api/updateriderlocation"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-updateriderlocation', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-updateriderlocation"
                    onclick="tryItOut('GETapi-updateriderlocation');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-updateriderlocation"
                    onclick="cancelTryOut('GETapi-updateriderlocation');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-updateriderlocation"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/updateriderlocation</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-updateriderlocation"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-updateriderlocation"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>latitude</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="latitude"                data-endpoint="GETapi-updateriderlocation"
               value="veniam"
               data-component="body">
    <br>
<p>Example: <code>veniam</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>longitude</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="longitude"                data-endpoint="GETapi-updateriderlocation"
               value="a"
               data-component="body">
    <br>
<p>Example: <code>a</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-promo_details">Display the promo details</h2>

<p>
</p>



<span id="example-requests-GETapi-promo_details">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/promo_details';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/promo_details" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/promo_details"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-promo_details">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 84
access-control-allow-origin: *
set-cookie: laravel_session=9hjPgapezk9ANEQePlrlXEGIq2AePqfaVyU7kWcX; expires=Fri, 19 Jul 2024 14:46:26 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-promo_details" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-promo_details"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-promo_details"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-promo_details" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-promo_details">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-promo_details" data-method="GET"
      data-path="api/promo_details"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-promo_details', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-promo_details"
                    onclick="tryItOut('GETapi-promo_details');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-promo_details"
                    onclick="cancelTryOut('GETapi-promo_details');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-promo_details"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/promo_details</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-promo_details"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-promo_details"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-sos">Display the SOS details</h2>

<p>
</p>



<span id="example-requests-GETapi-sos">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/sos';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/sos" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/sos"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-sos">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 83
access-control-allow-origin: *
set-cookie: laravel_session=6wy6KtLFZSKxAchBgkowlq7AAduxG8brrT1nWv1V; expires=Fri, 19 Jul 2024 14:46:26 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-sos" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-sos"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-sos"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-sos" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-sos">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-sos" data-method="GET"
      data-path="api/sos"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-sos', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-sos"
                    onclick="tryItOut('GETapi-sos');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-sos"
                    onclick="cancelTryOut('GETapi-sos');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-sos"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/sos</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-sos"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-sos"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-sosalert">SOS alert Message to Admin and Rider Added Mobile numbers</h2>

<p>
</p>



<span id="example-requests-GETapi-sosalert">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/sosalert';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/sosalert" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/sosalert"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-sosalert">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 82
access-control-allow-origin: *
set-cookie: laravel_session=JD2TxnfmZmv5Smf4sbcypiTeLYMNO9bYcsPiCnqI; expires=Fri, 19 Jul 2024 14:46:26 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-sosalert" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-sosalert"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-sosalert"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-sosalert" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-sosalert">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-sosalert" data-method="GET"
      data-path="api/sosalert"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-sosalert', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-sosalert"
                    onclick="tryItOut('GETapi-sosalert');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-sosalert"
                    onclick="cancelTryOut('GETapi-sosalert');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-sosalert"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/sosalert</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-sosalert"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-sosalert"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-save_schedule_ride">Save Schedule Ride</h2>

<p>
</p>



<span id="example-requests-POSTapi-save_schedule_ride">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/save_schedule_ride';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://rideinjune.test/api/save_schedule_ride" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/save_schedule_ride"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-save_schedule_ride">
</span>
<span id="execution-results-POSTapi-save_schedule_ride" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-save_schedule_ride"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-save_schedule_ride"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-save_schedule_ride" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-save_schedule_ride">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-save_schedule_ride" data-method="POST"
      data-path="api/save_schedule_ride"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-save_schedule_ride', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-save_schedule_ride"
                    onclick="tryItOut('POSTapi-save_schedule_ride');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-save_schedule_ride"
                    onclick="cancelTryOut('POSTapi-save_schedule_ride');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-save_schedule_ride"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/save_schedule_ride</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-save_schedule_ride"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-save_schedule_ride"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-schedule_ride_cancel">Cancel Saved Schedule Ride</h2>

<p>
</p>



<span id="example-requests-GETapi-schedule_ride_cancel">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/schedule_ride_cancel';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'trip_id' =&gt; 'ipsum',
            'cancel_reason_id' =&gt; 'suscipit',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/schedule_ride_cancel" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"trip_id\": \"ipsum\",
    \"cancel_reason_id\": \"suscipit\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/schedule_ride_cancel"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "trip_id": "ipsum",
    "cancel_reason_id": "suscipit"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-schedule_ride_cancel">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 81
access-control-allow-origin: *
set-cookie: laravel_session=p0wzhHrGG8E0DUVBn24bKwDiGDckYNwZ21SObGtd; expires=Fri, 19 Jul 2024 14:46:26 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-schedule_ride_cancel" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-schedule_ride_cancel"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-schedule_ride_cancel"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-schedule_ride_cancel" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-schedule_ride_cancel">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-schedule_ride_cancel" data-method="GET"
      data-path="api/schedule_ride_cancel"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-schedule_ride_cancel', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-schedule_ride_cancel"
                    onclick="tryItOut('GETapi-schedule_ride_cancel');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-schedule_ride_cancel"
                    onclick="cancelTryOut('GETapi-schedule_ride_cancel');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-schedule_ride_cancel"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/schedule_ride_cancel</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-schedule_ride_cancel"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-schedule_ride_cancel"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>trip_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="trip_id"                data-endpoint="GETapi-schedule_ride_cancel"
               value="ipsum"
               data-component="body">
    <br>
<p>Example: <code>ipsum</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>cancel_reason_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="cancel_reason_id"                data-endpoint="GETapi-schedule_ride_cancel"
               value="suscipit"
               data-component="body">
    <br>
<p>Example: <code>suscipit</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-add_wallet">POST api/add_wallet</h2>

<p>
</p>



<span id="example-requests-POSTapi-add_wallet">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/add_wallet';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://rideinjune.test/api/add_wallet" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/add_wallet"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-add_wallet">
</span>
<span id="execution-results-POSTapi-add_wallet" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-add_wallet"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-add_wallet"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-add_wallet" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-add_wallet">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-add_wallet" data-method="POST"
      data-path="api/add_wallet"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-add_wallet', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-add_wallet"
                    onclick="tryItOut('POSTapi-add_wallet');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-add_wallet"
                    onclick="cancelTryOut('POSTapi-add_wallet');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-add_wallet"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/add_wallet</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-add_wallet"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-add_wallet"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-after_payment">POST api/after_payment</h2>

<p>
</p>



<span id="example-requests-POSTapi-after_payment">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/after_payment';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://rideinjune.test/api/after_payment" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/after_payment"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-after_payment">
</span>
<span id="execution-results-POSTapi-after_payment" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-after_payment"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-after_payment"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-after_payment" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-after_payment">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-after_payment" data-method="POST"
      data-path="api/after_payment"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-after_payment', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-after_payment"
                    onclick="tryItOut('POSTapi-after_payment');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-after_payment"
                    onclick="cancelTryOut('POSTapi-after_payment');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-after_payment"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/after_payment</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-after_payment"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-after_payment"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-get_past_trips">Display the Past Trips of Rider</h2>

<p>
</p>



<span id="example-requests-GETapi-get_past_trips">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/get_past_trips';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'page' =&gt; 'wjukejgjrvifaeekwxyvvsqhdqbtyztoxshujqdkbxjlrkariorjwthppwwvyyynghotutjurpmomskbclfx',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/get_past_trips" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"page\": \"wjukejgjrvifaeekwxyvvsqhdqbtyztoxshujqdkbxjlrkariorjwthppwwvyyynghotutjurpmomskbclfx\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/get_past_trips"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "page": "wjukejgjrvifaeekwxyvvsqhdqbtyztoxshujqdkbxjlrkariorjwthppwwvyyynghotutjurpmomskbclfx"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-get_past_trips">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 80
access-control-allow-origin: *
set-cookie: laravel_session=SOy9l7CmOufOBUSv5tUiiEQCPKLW9PR4uOm5sKsG; expires=Fri, 19 Jul 2024 14:46:26 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-get_past_trips" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-get_past_trips"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-get_past_trips"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-get_past_trips" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-get_past_trips">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-get_past_trips" data-method="GET"
      data-path="api/get_past_trips"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-get_past_trips', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-get_past_trips"
                    onclick="tryItOut('GETapi-get_past_trips');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-get_past_trips"
                    onclick="cancelTryOut('GETapi-get_past_trips');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-get_past_trips"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/get_past_trips</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-get_past_trips"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-get_past_trips"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>page</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="page"                data-endpoint="GETapi-get_past_trips"
               value="wjukejgjrvifaeekwxyvvsqhdqbtyztoxshujqdkbxjlrkariorjwthppwwvyyynghotutjurpmomskbclfx"
               data-component="body">
    <br>
<p>Must be at least 1 character. Example: <code>wjukejgjrvifaeekwxyvvsqhdqbtyztoxshujqdkbxjlrkariorjwthppwwvyyynghotutjurpmomskbclfx</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-get_upcoming_trips">Display the Upcoming Trips of Rider</h2>

<p>
</p>



<span id="example-requests-GETapi-get_upcoming_trips">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/get_upcoming_trips';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'page' =&gt; 'jrftijvdcmakivvtyzgjmqotqpnacmfrzzqvvhwtrf',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/get_upcoming_trips" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"page\": \"jrftijvdcmakivvtyzgjmqotqpnacmfrzzqvvhwtrf\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/get_upcoming_trips"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "page": "jrftijvdcmakivvtyzgjmqotqpnacmfrzzqvvhwtrf"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-get_upcoming_trips">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 79
access-control-allow-origin: *
set-cookie: laravel_session=5MYjPnAt9iNUpD4sqLz6IEznq4fPrvIjgt9XFDmj; expires=Fri, 19 Jul 2024 14:46:27 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-get_upcoming_trips" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-get_upcoming_trips"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-get_upcoming_trips"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-get_upcoming_trips" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-get_upcoming_trips">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-get_upcoming_trips" data-method="GET"
      data-path="api/get_upcoming_trips"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-get_upcoming_trips', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-get_upcoming_trips"
                    onclick="tryItOut('GETapi-get_upcoming_trips');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-get_upcoming_trips"
                    onclick="cancelTryOut('GETapi-get_upcoming_trips');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-get_upcoming_trips"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/get_upcoming_trips</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-get_upcoming_trips"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-get_upcoming_trips"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>page</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="page"                data-endpoint="GETapi-get_upcoming_trips"
               value="jrftijvdcmakivvtyzgjmqotqpnacmfrzzqvvhwtrf"
               data-component="body">
    <br>
<p>Must be at least 1 character. Example: <code>jrftijvdcmakivvtyzgjmqotqpnacmfrzzqvvhwtrf</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-currency_conversion">GET api/currency_conversion</h2>

<p>
</p>



<span id="example-requests-GETapi-currency_conversion">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/currency_conversion';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'amount' =&gt; 81,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/currency_conversion" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"amount\": 81
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/currency_conversion"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "amount": 81
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-currency_conversion">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 78
access-control-allow-origin: *
set-cookie: laravel_session=ZFxznKdvYFc4zyKHJwEdYLCYVm4SbaQpz2ORlm2a; expires=Fri, 19 Jul 2024 14:46:27 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-currency_conversion" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-currency_conversion"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-currency_conversion"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-currency_conversion" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-currency_conversion">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-currency_conversion" data-method="GET"
      data-path="api/currency_conversion"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-currency_conversion', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-currency_conversion"
                    onclick="tryItOut('GETapi-currency_conversion');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-currency_conversion"
                    onclick="cancelTryOut('GETapi-currency_conversion');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-currency_conversion"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/currency_conversion</code></b>
        </p>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/currency_conversion</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-currency_conversion"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-currency_conversion"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>amount</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="amount"                data-endpoint="GETapi-currency_conversion"
               value="81"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>81</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>payment_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="payment_type"                data-endpoint="GETapi-currency_conversion"
               value=""
               data-component="body">
    <br>

        </div>
        </form>

                    <h2 id="endpoints-POSTapi-start_schedule_trip">POST api/start_schedule_trip</h2>

<p>
</p>



<span id="example-requests-POSTapi-start_schedule_trip">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/start_schedule_trip';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'trip_id' =&gt; 'eius',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://rideinjune.test/api/start_schedule_trip" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"trip_id\": \"eius\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/start_schedule_trip"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "trip_id": "eius"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-start_schedule_trip">
</span>
<span id="execution-results-POSTapi-start_schedule_trip" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-start_schedule_trip"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-start_schedule_trip"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-start_schedule_trip" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-start_schedule_trip">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-start_schedule_trip" data-method="POST"
      data-path="api/start_schedule_trip"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-start_schedule_trip', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-start_schedule_trip"
                    onclick="tryItOut('POSTapi-start_schedule_trip');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-start_schedule_trip"
                    onclick="cancelTryOut('POSTapi-start_schedule_trip');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-start_schedule_trip"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/start_schedule_trip</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-start_schedule_trip"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-start_schedule_trip"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>trip_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="trip_id"                data-endpoint="POSTapi-start_schedule_trip"
               value="eius"
               data-component="body">
    <br>
<p>Example: <code>eius</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-get_pending_trips">Display the Pending Trips For the Driver</h2>

<p>
</p>



<span id="example-requests-GETapi-get_pending_trips">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/get_pending_trips';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'page' =&gt; 'deh',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/get_pending_trips" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"page\": \"deh\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/get_pending_trips"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "page": "deh"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-get_pending_trips">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 77
access-control-allow-origin: *
set-cookie: laravel_session=HYPQ0fH2VHsH8uPk4u1jpyELN0PZ3hmRaF3LoyFU; expires=Fri, 19 Jul 2024 14:46:27 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-get_pending_trips" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-get_pending_trips"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-get_pending_trips"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-get_pending_trips" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-get_pending_trips">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-get_pending_trips" data-method="GET"
      data-path="api/get_pending_trips"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-get_pending_trips', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-get_pending_trips"
                    onclick="tryItOut('GETapi-get_pending_trips');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-get_pending_trips"
                    onclick="cancelTryOut('GETapi-get_pending_trips');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-get_pending_trips"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/get_pending_trips</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-get_pending_trips"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-get_pending_trips"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>page</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="page"                data-endpoint="GETapi-get_pending_trips"
               value="deh"
               data-component="body">
    <br>
<p>Must be at least 1 character. Example: <code>deh</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-get_completed_trips">Display the Completed Trips</h2>

<p>
</p>



<span id="example-requests-GETapi-get_completed_trips">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/get_completed_trips';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'page' =&gt; 'bdrc',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/get_completed_trips" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"page\": \"bdrc\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/get_completed_trips"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "page": "bdrc"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-get_completed_trips">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 76
access-control-allow-origin: *
set-cookie: laravel_session=Y5LUW1z1aMsxxpoxhYNxXq1HC4jwt5nQl6If8d8l; expires=Fri, 19 Jul 2024 14:46:27 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-get_completed_trips" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-get_completed_trips"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-get_completed_trips"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-get_completed_trips" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-get_completed_trips">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-get_completed_trips" data-method="GET"
      data-path="api/get_completed_trips"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-get_completed_trips', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-get_completed_trips"
                    onclick="tryItOut('GETapi-get_completed_trips');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-get_completed_trips"
                    onclick="cancelTryOut('GETapi-get_completed_trips');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-get_completed_trips"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/get_completed_trips</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-get_completed_trips"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-get_completed_trips"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>page</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="page"                data-endpoint="GETapi-get_completed_trips"
               value="bdrc"
               data-component="body">
    <br>
<p>Must be at least 1 character. Example: <code>bdrc</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-arive_now">Display the Arrive Now Status</h2>

<p>
</p>



<span id="example-requests-GETapi-arive_now">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/arive_now';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'trip_id' =&gt; 'voluptatum',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/arive_now" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"trip_id\": \"voluptatum\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/arive_now"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "trip_id": "voluptatum"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-arive_now">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 75
access-control-allow-origin: *
set-cookie: laravel_session=2OFGTypb5lQikCBGIkjZmZYxjPsIXp4Ad2HPKlyi; expires=Fri, 19 Jul 2024 14:46:27 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-arive_now" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-arive_now"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-arive_now"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-arive_now" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-arive_now">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-arive_now" data-method="GET"
      data-path="api/arive_now"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-arive_now', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-arive_now"
                    onclick="tryItOut('GETapi-arive_now');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-arive_now"
                    onclick="cancelTryOut('GETapi-arive_now');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-arive_now"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/arive_now</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-arive_now"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-arive_now"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>trip_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="trip_id"                data-endpoint="GETapi-arive_now"
               value="voluptatum"
               data-component="body">
    <br>
<p>Example: <code>voluptatum</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-begin_trip">Begin Trip From Driver</h2>

<p>
</p>



<span id="example-requests-GETapi-begin_trip">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/begin_trip';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'trip_id' =&gt; 'iure',
            'begin_latitude' =&gt; 'assumenda',
            'begin_longitude' =&gt; 'sit',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/begin_trip" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"trip_id\": \"iure\",
    \"begin_latitude\": \"assumenda\",
    \"begin_longitude\": \"sit\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/begin_trip"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "trip_id": "iure",
    "begin_latitude": "assumenda",
    "begin_longitude": "sit"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-begin_trip">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 74
access-control-allow-origin: *
set-cookie: laravel_session=EZSPCquHIeHQlgtS8y1hblbTKX5lYiSukFeoOJX0; expires=Fri, 19 Jul 2024 14:46:27 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-begin_trip" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-begin_trip"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-begin_trip"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-begin_trip" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-begin_trip">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-begin_trip" data-method="GET"
      data-path="api/begin_trip"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-begin_trip', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-begin_trip"
                    onclick="tryItOut('GETapi-begin_trip');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-begin_trip"
                    onclick="cancelTryOut('GETapi-begin_trip');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-begin_trip"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/begin_trip</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-begin_trip"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-begin_trip"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>trip_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="trip_id"                data-endpoint="GETapi-begin_trip"
               value="iure"
               data-component="body">
    <br>
<p>Example: <code>iure</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>begin_latitude</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="begin_latitude"                data-endpoint="GETapi-begin_trip"
               value="assumenda"
               data-component="body">
    <br>
<p>Example: <code>assumenda</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>begin_longitude</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="begin_longitude"                data-endpoint="GETapi-begin_trip"
               value="sit"
               data-component="body">
    <br>
<p>Example: <code>sit</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-accept_request">Accept the Trip Request</h2>

<p>
</p>



<span id="example-requests-GETapi-accept_request">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/accept_request';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'user_type' =&gt; 'driver',
            'status' =&gt; 'Trip',
            'request_id' =&gt; 'eligendi',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/accept_request" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"user_type\": \"driver\",
    \"status\": \"Trip\",
    \"request_id\": \"eligendi\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/accept_request"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_type": "driver",
    "status": "Trip",
    "request_id": "eligendi"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-accept_request">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 73
access-control-allow-origin: *
set-cookie: laravel_session=euRn00GHrd87ClkxQpQDIUHf1NGw1ATsCYFJz36s; expires=Fri, 19 Jul 2024 14:46:27 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-accept_request" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-accept_request"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-accept_request"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-accept_request" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-accept_request">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-accept_request" data-method="GET"
      data-path="api/accept_request"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-accept_request', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-accept_request"
                    onclick="tryItOut('GETapi-accept_request');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-accept_request"
                    onclick="cancelTryOut('GETapi-accept_request');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-accept_request"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/accept_request</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-accept_request"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-accept_request"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="user_type"                data-endpoint="GETapi-accept_request"
               value="driver"
               data-component="body">
    <br>
<p>Example: <code>driver</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>Driver</code></li> <li><code>driver</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="GETapi-accept_request"
               value="Trip"
               data-component="body">
    <br>
<p>Example: <code>Trip</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>Online</code></li> <li><code>online</code></li> <li><code>Trip</code></li> <li><code>trip</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>request_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="request_id"                data-endpoint="GETapi-accept_request"
               value="eligendi"
               data-component="body">
    <br>
<p>Example: <code>eligendi</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-cash_collected">GET api/cash_collected</h2>

<p>
</p>



<span id="example-requests-GETapi-cash_collected">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/cash_collected';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'trip_id' =&gt; 'fugiat',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/cash_collected" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"trip_id\": \"fugiat\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/cash_collected"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "trip_id": "fugiat"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-cash_collected">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 72
access-control-allow-origin: *
set-cookie: laravel_session=Q1mBkjpHvBqYDve6smHSbDsaV381UtURt6UGKO5g; expires=Fri, 19 Jul 2024 14:46:27 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-cash_collected" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-cash_collected"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-cash_collected"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-cash_collected" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-cash_collected">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-cash_collected" data-method="GET"
      data-path="api/cash_collected"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-cash_collected', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-cash_collected"
                    onclick="tryItOut('GETapi-cash_collected');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-cash_collected"
                    onclick="cancelTryOut('GETapi-cash_collected');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-cash_collected"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/cash_collected</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-cash_collected"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-cash_collected"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>trip_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="trip_id"                data-endpoint="GETapi-cash_collected"
               value="fugiat"
               data-component="body">
    <br>
<p>Example: <code>fugiat</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-map_upload">Map Image upload</h2>

<p>
</p>



<span id="example-requests-GETapi-map_upload">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/map_upload';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'trip_id' =&gt; 'et',
            'image' =&gt; 'commodi',
            'token' =&gt; 'eius',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/map_upload" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"trip_id\": \"et\",
    \"image\": \"commodi\",
    \"token\": \"eius\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/map_upload"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "trip_id": "et",
    "image": "commodi",
    "token": "eius"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-map_upload">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 71
access-control-allow-origin: *
set-cookie: laravel_session=XFsGs75t24EfO528nLUzIHbr63UnfweftJ2mJhwx; expires=Fri, 19 Jul 2024 14:46:27 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Token is Invalid&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-map_upload" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-map_upload"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-map_upload"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-map_upload" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-map_upload">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-map_upload" data-method="GET"
      data-path="api/map_upload"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-map_upload', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-map_upload"
                    onclick="tryItOut('GETapi-map_upload');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-map_upload"
                    onclick="cancelTryOut('GETapi-map_upload');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-map_upload"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/map_upload</code></b>
        </p>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/map_upload</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-map_upload"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-map_upload"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>trip_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="trip_id"                data-endpoint="GETapi-map_upload"
               value="et"
               data-component="body">
    <br>
<p>Example: <code>et</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>image</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="image"                data-endpoint="GETapi-map_upload"
               value="commodi"
               data-component="body">
    <br>
<p>Example: <code>commodi</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>token</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="token"                data-endpoint="GETapi-map_upload"
               value="eius"
               data-component="body">
    <br>
<p>Example: <code>eius</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-end_trip">End Trip From Driver</h2>

<p>
</p>



<span id="example-requests-GETapi-end_trip">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/end_trip';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'trip_id' =&gt; 'praesentium',
            'end_latitude' =&gt; 'omnis',
            'end_longitude' =&gt; 'animi',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/end_trip" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"trip_id\": \"praesentium\",
    \"end_latitude\": \"omnis\",
    \"end_longitude\": \"animi\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/end_trip"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "trip_id": "praesentium",
    "end_latitude": "omnis",
    "end_longitude": "animi"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-end_trip">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 70
access-control-allow-origin: *
set-cookie: laravel_session=Iw3ARgU2p0YnN5mEdxEZA44BrVZUdQBALJFgdq7K; expires=Fri, 19 Jul 2024 14:46:27 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-end_trip" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-end_trip"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-end_trip"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-end_trip" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-end_trip">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-end_trip" data-method="GET"
      data-path="api/end_trip"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-end_trip', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-end_trip"
                    onclick="tryItOut('GETapi-end_trip');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-end_trip"
                    onclick="cancelTryOut('GETapi-end_trip');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-end_trip"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/end_trip</code></b>
        </p>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/end_trip</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-end_trip"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-end_trip"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>trip_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="trip_id"                data-endpoint="GETapi-end_trip"
               value="praesentium"
               data-component="body">
    <br>
<p>Example: <code>praesentium</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>end_latitude</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="end_latitude"                data-endpoint="GETapi-end_trip"
               value="omnis"
               data-component="body">
    <br>
<p>Example: <code>omnis</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>end_longitude</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="end_longitude"                data-endpoint="GETapi-end_trip"
               value="animi"
               data-component="body">
    <br>
<p>Example: <code>animi</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-upload_profile_image">User Profile photo upload</h2>

<p>
</p>



<span id="example-requests-GETapi-upload_profile_image">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/upload_profile_image';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'image' =&gt; 'ipsam',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/upload_profile_image" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"image\": \"ipsam\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/upload_profile_image"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "image": "ipsam"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-upload_profile_image">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 69
access-control-allow-origin: *
set-cookie: laravel_session=71Zbrz0Zjh5POf8hYHwzcoClFex10V6mj1fNSjzT; expires=Fri, 19 Jul 2024 14:46:27 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-upload_profile_image" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-upload_profile_image"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-upload_profile_image"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-upload_profile_image" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-upload_profile_image">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-upload_profile_image" data-method="GET"
      data-path="api/upload_profile_image"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-upload_profile_image', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-upload_profile_image"
                    onclick="tryItOut('GETapi-upload_profile_image');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-upload_profile_image"
                    onclick="cancelTryOut('GETapi-upload_profile_image');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-upload_profile_image"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/upload_profile_image</code></b>
        </p>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/upload_profile_image</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-upload_profile_image"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-upload_profile_image"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>image</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="image"                data-endpoint="GETapi-upload_profile_image"
               value="ipsam"
               data-component="body">
    <br>
<p>Example: <code>ipsam</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-heat_map">Send data for heat map</h2>

<p>
</p>



<span id="example-requests-GETapi-heat_map">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/heat_map';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/heat_map" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/heat_map"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-heat_map">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 68
access-control-allow-origin: *
set-cookie: laravel_session=Ug0ZxGCNgDeEjigNqq5rnfveNQLQg7H18QpT6AZT; expires=Fri, 19 Jul 2024 14:46:27 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-heat_map" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-heat_map"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-heat_map"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-heat_map" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-heat_map">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-heat_map" data-method="GET"
      data-path="api/heat_map"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-heat_map', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-heat_map"
                    onclick="tryItOut('GETapi-heat_map');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-heat_map"
                    onclick="cancelTryOut('GETapi-heat_map');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-heat_map"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/heat_map</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-heat_map"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-heat_map"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-pay_to_admin">POST api/pay_to_admin</h2>

<p>
</p>



<span id="example-requests-POSTapi-pay_to_admin">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/pay_to_admin';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://rideinjune.test/api/pay_to_admin" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/pay_to_admin"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-pay_to_admin">
</span>
<span id="execution-results-POSTapi-pay_to_admin" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-pay_to_admin"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-pay_to_admin"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-pay_to_admin" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-pay_to_admin">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-pay_to_admin" data-method="POST"
      data-path="api/pay_to_admin"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-pay_to_admin', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-pay_to_admin"
                    onclick="tryItOut('POSTapi-pay_to_admin');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-pay_to_admin"
                    onclick="cancelTryOut('POSTapi-pay_to_admin');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-pay_to_admin"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/pay_to_admin</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-pay_to_admin"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-pay_to_admin"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-cancel_trip">Trip Cancel by Driver or Rider</h2>

<p>
</p>



<span id="example-requests-GETapi-cancel_trip">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/cancel_trip';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'user_type' =&gt; 'rider',
            'trip_id' =&gt; 'et',
            'cancel_reason_id' =&gt; 'autem',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/cancel_trip" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"user_type\": \"rider\",
    \"trip_id\": \"et\",
    \"cancel_reason_id\": \"autem\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/cancel_trip"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_type": "rider",
    "trip_id": "et",
    "cancel_reason_id": "autem"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-cancel_trip">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 67
access-control-allow-origin: *
set-cookie: laravel_session=uzMNSDJTqQNy8BXVtM4mN8HWhQdfuaGs9TD56Hjq; expires=Fri, 19 Jul 2024 14:46:27 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-cancel_trip" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-cancel_trip"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-cancel_trip"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-cancel_trip" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-cancel_trip">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-cancel_trip" data-method="GET"
      data-path="api/cancel_trip"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-cancel_trip', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-cancel_trip"
                    onclick="tryItOut('GETapi-cancel_trip');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-cancel_trip"
                    onclick="cancelTryOut('GETapi-cancel_trip');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-cancel_trip"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/cancel_trip</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-cancel_trip"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-cancel_trip"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="user_type"                data-endpoint="GETapi-cancel_trip"
               value="rider"
               data-component="body">
    <br>
<p>Example: <code>rider</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>Rider</code></li> <li><code>rider</code></li> <li><code>Driver</code></li> <li><code>driver</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>trip_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="trip_id"                data-endpoint="GETapi-cancel_trip"
               value="et"
               data-component="body">
    <br>
<p>Example: <code>et</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>cancel_reason_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="cancel_reason_id"                data-endpoint="GETapi-cancel_trip"
               value="autem"
               data-component="body">
    <br>
<p>Example: <code>autem</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-earning_chart">Display the Earning chart details in Driver</h2>

<p>
</p>



<span id="example-requests-GETapi-earning_chart">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/earning_chart';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'user_type' =&gt; 'Driver',
            'start_date' =&gt; 'est',
            'end_date' =&gt; 'deserunt',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/earning_chart" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"user_type\": \"Driver\",
    \"start_date\": \"est\",
    \"end_date\": \"deserunt\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/earning_chart"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_type": "Driver",
    "start_date": "est",
    "end_date": "deserunt"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-earning_chart">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 66
access-control-allow-origin: *
set-cookie: laravel_session=ZgD3kTQ9AumkcnRkfh1OFlhftDWHpUBvun0F8O7P; expires=Fri, 19 Jul 2024 14:46:27 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-earning_chart" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-earning_chart"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-earning_chart"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-earning_chart" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-earning_chart">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-earning_chart" data-method="GET"
      data-path="api/earning_chart"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-earning_chart', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-earning_chart"
                    onclick="tryItOut('GETapi-earning_chart');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-earning_chart"
                    onclick="cancelTryOut('GETapi-earning_chart');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-earning_chart"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/earning_chart</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-earning_chart"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-earning_chart"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="user_type"                data-endpoint="GETapi-earning_chart"
               value="Driver"
               data-component="body">
    <br>
<p>Example: <code>Driver</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>Driver</code></li> <li><code>driver</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>start_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="start_date"                data-endpoint="GETapi-earning_chart"
               value="est"
               data-component="body">
    <br>
<p>Example: <code>est</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>end_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="end_date"                data-endpoint="GETapi-earning_chart"
               value="deserunt"
               data-component="body">
    <br>
<p>Example: <code>deserunt</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-add_promo_code">GET api/add_promo_code</h2>

<p>
</p>



<span id="example-requests-GETapi-add_promo_code">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/add_promo_code';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'code' =&gt; 'ut',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/add_promo_code" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"code\": \"ut\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/add_promo_code"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "code": "ut"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-add_promo_code">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 65
access-control-allow-origin: *
set-cookie: laravel_session=lR3iYBH4IJto8ukeX60UECzlti0o4muq5DK1GAjk; expires=Fri, 19 Jul 2024 14:46:27 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-add_promo_code" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-add_promo_code"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-add_promo_code"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-add_promo_code" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-add_promo_code">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-add_promo_code" data-method="GET"
      data-path="api/add_promo_code"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-add_promo_code', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-add_promo_code"
                    onclick="tryItOut('GETapi-add_promo_code');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-add_promo_code"
                    onclick="cancelTryOut('GETapi-add_promo_code');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-add_promo_code"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/add_promo_code</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-add_promo_code"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-add_promo_code"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="code"                data-endpoint="GETapi-add_promo_code"
               value="ut"
               data-component="body">
    <br>
<p>Example: <code>ut</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-driver_rating">Display the Diver rating</h2>

<p>
</p>



<span id="example-requests-GETapi-driver_rating">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/driver_rating';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'user_type' =&gt; 'driver',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/driver_rating" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"user_type\": \"driver\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/driver_rating"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_type": "driver"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-driver_rating">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 64
access-control-allow-origin: *
set-cookie: laravel_session=DX4x3nyIp8c5dgiyxFwvKUvub7bJrWjeMzyhJM6O; expires=Fri, 19 Jul 2024 14:46:27 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-driver_rating" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-driver_rating"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-driver_rating"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-driver_rating" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-driver_rating">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-driver_rating" data-method="GET"
      data-path="api/driver_rating"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-driver_rating', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-driver_rating"
                    onclick="tryItOut('GETapi-driver_rating');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-driver_rating"
                    onclick="cancelTryOut('GETapi-driver_rating');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-driver_rating"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/driver_rating</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-driver_rating"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-driver_rating"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="user_type"                data-endpoint="GETapi-driver_rating"
               value="driver"
               data-component="body">
    <br>
<p>Example: <code>driver</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>Driver</code></li> <li><code>driver</code></li></ul>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-rider_feedback">Display the Rider Feedback</h2>

<p>
</p>



<span id="example-requests-GETapi-rider_feedback">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/rider_feedback';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'user_type' =&gt; 'driver',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/rider_feedback" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"user_type\": \"driver\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/rider_feedback"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_type": "driver"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-rider_feedback">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 63
access-control-allow-origin: *
set-cookie: laravel_session=2UZzxm4gEwaSERJpUJyFEzceAJhSaXVQoMoZilV3; expires=Fri, 19 Jul 2024 14:46:27 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-rider_feedback" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-rider_feedback"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-rider_feedback"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-rider_feedback" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-rider_feedback">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-rider_feedback" data-method="GET"
      data-path="api/rider_feedback"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-rider_feedback', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-rider_feedback"
                    onclick="tryItOut('GETapi-rider_feedback');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-rider_feedback"
                    onclick="cancelTryOut('GETapi-rider_feedback');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-rider_feedback"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/rider_feedback</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-rider_feedback"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-rider_feedback"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="user_type"                data-endpoint="GETapi-rider_feedback"
               value="driver"
               data-component="body">
    <br>
<p>Example: <code>driver</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>Driver</code></li> <li><code>driver</code></li></ul>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-trip_rating">Update the trip Rating given by Driver or Rider</h2>

<p>
</p>



<span id="example-requests-GETapi-trip_rating">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/trip_rating';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'user_type' =&gt; 'Driver',
            'rating' =&gt; 'esse',
            'trip_id' =&gt; 'in',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/trip_rating" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"user_type\": \"Driver\",
    \"rating\": \"esse\",
    \"trip_id\": \"in\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/trip_rating"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_type": "Driver",
    "rating": "esse",
    "trip_id": "in"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-trip_rating">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 62
access-control-allow-origin: *
set-cookie: laravel_session=SzRng4QoATYDLCc30xLsM5HxvXzSfFbhMjppuzyQ; expires=Fri, 19 Jul 2024 14:46:27 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-trip_rating" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-trip_rating"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-trip_rating"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-trip_rating" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-trip_rating">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-trip_rating" data-method="GET"
      data-path="api/trip_rating"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-trip_rating', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-trip_rating"
                    onclick="tryItOut('GETapi-trip_rating');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-trip_rating"
                    onclick="cancelTryOut('GETapi-trip_rating');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-trip_rating"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/trip_rating</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-trip_rating"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-trip_rating"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="user_type"                data-endpoint="GETapi-trip_rating"
               value="Driver"
               data-component="body">
    <br>
<p>Example: <code>Driver</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>Rider</code></li> <li><code>rider</code></li> <li><code>Driver</code></li> <li><code>driver</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>rating</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rating"                data-endpoint="GETapi-trip_rating"
               value="esse"
               data-component="body">
    <br>
<p>Example: <code>esse</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>trip_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="trip_id"                data-endpoint="GETapi-trip_rating"
               value="in"
               data-component="body">
    <br>
<p>Example: <code>in</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-get_invoice">Get The Invoice of the given Trip id</h2>

<p>
</p>



<span id="example-requests-GETapi-get_invoice">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/get_invoice';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'user_type' =&gt; 'rider',
            'trip_id' =&gt; 'dolor',
            'payment_mode' =&gt; 'braintree',
            'is_wallet' =&gt; 'Yes',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/get_invoice" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"user_type\": \"rider\",
    \"trip_id\": \"dolor\",
    \"payment_mode\": \"braintree\",
    \"is_wallet\": \"Yes\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/get_invoice"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_type": "rider",
    "trip_id": "dolor",
    "payment_mode": "braintree",
    "is_wallet": "Yes"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-get_invoice">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 61
access-control-allow-origin: *
set-cookie: laravel_session=VnIkMi6qOePOksTjTNkMEJT2jgYS41pVaLG4WyyE; expires=Fri, 19 Jul 2024 14:46:27 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-get_invoice" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-get_invoice"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-get_invoice"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-get_invoice" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-get_invoice">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-get_invoice" data-method="GET"
      data-path="api/get_invoice"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-get_invoice', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-get_invoice"
                    onclick="tryItOut('GETapi-get_invoice');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-get_invoice"
                    onclick="cancelTryOut('GETapi-get_invoice');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-get_invoice"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/get_invoice</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-get_invoice"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-get_invoice"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="user_type"                data-endpoint="GETapi-get_invoice"
               value="rider"
               data-component="body">
    <br>
<p>Example: <code>rider</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>Rider</code></li> <li><code>rider</code></li> <li><code>Driver</code></li> <li><code>driver</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>trip_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="trip_id"                data-endpoint="GETapi-get_invoice"
               value="dolor"
               data-component="body">
    <br>
<p>Example: <code>dolor</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>payment_mode</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="payment_mode"                data-endpoint="GETapi-get_invoice"
               value="braintree"
               data-component="body">
    <br>
<p>Example: <code>braintree</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>paypal</code></li> <li><code>stripe</code></li> <li><code>cash</code></li> <li><code>braintree</code></li> <li><code>onlinepayment</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_wallet</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="is_wallet"                data-endpoint="GETapi-get_invoice"
               value="Yes"
               data-component="body">
    <br>
<p>Example: <code>Yes</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>Yes</code></li> <li><code>No</code></li></ul>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-get_rider_profile">Display the Rider profile details &amp; get the trip information while app closed</h2>

<p>
</p>



<span id="example-requests-GETapi-get_rider_profile">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/get_rider_profile';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/get_rider_profile" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/get_rider_profile"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-get_rider_profile">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 60
access-control-allow-origin: *
set-cookie: laravel_session=Rg6bEh59xMHjD8trwFc0pLabg8xX8zlJIpAetHGk; expires=Fri, 19 Jul 2024 14:46:27 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-get_rider_profile" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-get_rider_profile"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-get_rider_profile"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-get_rider_profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-get_rider_profile">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-get_rider_profile" data-method="GET"
      data-path="api/get_rider_profile"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-get_rider_profile', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-get_rider_profile"
                    onclick="tryItOut('GETapi-get_rider_profile');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-get_rider_profile"
                    onclick="cancelTryOut('GETapi-get_rider_profile');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-get_rider_profile"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/get_rider_profile</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-get_rider_profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-get_rider_profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-update_rider_profile">Update Rider Profile</h2>

<p>
</p>



<span id="example-requests-GETapi-update_rider_profile">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/update_rider_profile';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'profile_image' =&gt; 'provident',
            'first_name' =&gt; 'ut',
            'last_name' =&gt; 'minima',
            'country_code' =&gt; 'et',
            'mobile_number' =&gt; 'quis',
            'email_id' =&gt; 'repudiandae',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/update_rider_profile" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"profile_image\": \"provident\",
    \"first_name\": \"ut\",
    \"last_name\": \"minima\",
    \"country_code\": \"et\",
    \"mobile_number\": \"quis\",
    \"email_id\": \"repudiandae\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/update_rider_profile"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "profile_image": "provident",
    "first_name": "ut",
    "last_name": "minima",
    "country_code": "et",
    "mobile_number": "quis",
    "email_id": "repudiandae"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-update_rider_profile">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 59
access-control-allow-origin: *
set-cookie: laravel_session=oaPjhppwEKirAqkpX8ynHuqbYHW5Ii4dG07js8Vl; expires=Fri, 19 Jul 2024 14:46:27 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-update_rider_profile" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-update_rider_profile"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-update_rider_profile"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-update_rider_profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-update_rider_profile">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-update_rider_profile" data-method="GET"
      data-path="api/update_rider_profile"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-update_rider_profile', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-update_rider_profile"
                    onclick="tryItOut('GETapi-update_rider_profile');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-update_rider_profile"
                    onclick="cancelTryOut('GETapi-update_rider_profile');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-update_rider_profile"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/update_rider_profile</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-update_rider_profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-update_rider_profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>profile_image</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="profile_image"                data-endpoint="GETapi-update_rider_profile"
               value="provident"
               data-component="body">
    <br>
<p>Example: <code>provident</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>first_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="first_name"                data-endpoint="GETapi-update_rider_profile"
               value="ut"
               data-component="body">
    <br>
<p>Example: <code>ut</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>last_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="last_name"                data-endpoint="GETapi-update_rider_profile"
               value="minima"
               data-component="body">
    <br>
<p>Example: <code>minima</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country_code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="country_code"                data-endpoint="GETapi-update_rider_profile"
               value="et"
               data-component="body">
    <br>
<p>Example: <code>et</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>mobile_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="mobile_number"                data-endpoint="GETapi-update_rider_profile"
               value="quis"
               data-component="body">
    <br>
<p>Example: <code>quis</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email_id"                data-endpoint="GETapi-update_rider_profile"
               value="repudiandae"
               data-component="body">
    <br>
<p>Example: <code>repudiandae</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-get_driver_profile">Display Driver  Profile</h2>

<p>
</p>



<span id="example-requests-GETapi-get_driver_profile">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/get_driver_profile';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/get_driver_profile" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/get_driver_profile"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-get_driver_profile">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 58
access-control-allow-origin: *
set-cookie: laravel_session=vrkDI7bH3WjaRc0QfbV4ooAnKEuy4H7nIHgoHYMf; expires=Fri, 19 Jul 2024 14:46:27 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-get_driver_profile" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-get_driver_profile"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-get_driver_profile"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-get_driver_profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-get_driver_profile">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-get_driver_profile" data-method="GET"
      data-path="api/get_driver_profile"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-get_driver_profile', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-get_driver_profile"
                    onclick="tryItOut('GETapi-get_driver_profile');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-get_driver_profile"
                    onclick="cancelTryOut('GETapi-get_driver_profile');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-get_driver_profile"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/get_driver_profile</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-get_driver_profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-get_driver_profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-update_driver_profile">Update Driver  Profile</h2>

<p>
</p>



<span id="example-requests-GETapi-update_driver_profile">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/update_driver_profile';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'first_name' =&gt; 'recusandae',
            'last_name' =&gt; 'rerum',
            'mobile_number' =&gt; 'praesentium',
            'country_code' =&gt; 'quas',
            'email_id' =&gt; 'unde',
            'profile_image' =&gt; 'libero',
            'address_line1' =&gt; 'perspiciatis',
            'address_line2' =&gt; 'temporibus',
            'city' =&gt; 'sed',
            'state' =&gt; 'perferendis',
            'postal_code' =&gt; 'commodi',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/update_driver_profile" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"first_name\": \"recusandae\",
    \"last_name\": \"rerum\",
    \"mobile_number\": \"praesentium\",
    \"country_code\": \"quas\",
    \"email_id\": \"unde\",
    \"profile_image\": \"libero\",
    \"address_line1\": \"perspiciatis\",
    \"address_line2\": \"temporibus\",
    \"city\": \"sed\",
    \"state\": \"perferendis\",
    \"postal_code\": \"commodi\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/update_driver_profile"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "first_name": "recusandae",
    "last_name": "rerum",
    "mobile_number": "praesentium",
    "country_code": "quas",
    "email_id": "unde",
    "profile_image": "libero",
    "address_line1": "perspiciatis",
    "address_line2": "temporibus",
    "city": "sed",
    "state": "perferendis",
    "postal_code": "commodi"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-update_driver_profile">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 57
access-control-allow-origin: *
set-cookie: laravel_session=Xh0BQaI3GzU38dZzgfD4G1fS7z1C5L1fbPSolYSP; expires=Fri, 19 Jul 2024 14:46:27 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-update_driver_profile" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-update_driver_profile"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-update_driver_profile"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-update_driver_profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-update_driver_profile">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-update_driver_profile" data-method="GET"
      data-path="api/update_driver_profile"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-update_driver_profile', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-update_driver_profile"
                    onclick="tryItOut('GETapi-update_driver_profile');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-update_driver_profile"
                    onclick="cancelTryOut('GETapi-update_driver_profile');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-update_driver_profile"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/update_driver_profile</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-update_driver_profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-update_driver_profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>first_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="first_name"                data-endpoint="GETapi-update_driver_profile"
               value="recusandae"
               data-component="body">
    <br>
<p>Example: <code>recusandae</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>last_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="last_name"                data-endpoint="GETapi-update_driver_profile"
               value="rerum"
               data-component="body">
    <br>
<p>Example: <code>rerum</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>mobile_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="mobile_number"                data-endpoint="GETapi-update_driver_profile"
               value="praesentium"
               data-component="body">
    <br>
<p>Example: <code>praesentium</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country_code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="country_code"                data-endpoint="GETapi-update_driver_profile"
               value="quas"
               data-component="body">
    <br>
<p>Example: <code>quas</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email_id"                data-endpoint="GETapi-update_driver_profile"
               value="unde"
               data-component="body">
    <br>
<p>Example: <code>unde</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>profile_image</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="profile_image"                data-endpoint="GETapi-update_driver_profile"
               value="libero"
               data-component="body">
    <br>
<p>Example: <code>libero</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>address_line1</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="address_line1"                data-endpoint="GETapi-update_driver_profile"
               value="perspiciatis"
               data-component="body">
    <br>
<p>Example: <code>perspiciatis</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>address_line2</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="address_line2"                data-endpoint="GETapi-update_driver_profile"
               value="temporibus"
               data-component="body">
    <br>
<p>Example: <code>temporibus</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>city</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="city"                data-endpoint="GETapi-update_driver_profile"
               value="sed"
               data-component="body">
    <br>
<p>Example: <code>sed</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>state</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="state"                data-endpoint="GETapi-update_driver_profile"
               value="perferendis"
               data-component="body">
    <br>
<p>Example: <code>perferendis</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>postal_code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="postal_code"                data-endpoint="GETapi-update_driver_profile"
               value="commodi"
               data-component="body">
    <br>
<p>Example: <code>commodi</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-update_vehicle_details">Display the vehicle details</h2>

<p>
</p>



<span id="example-requests-GETapi-update_vehicle_details">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/update_vehicle_details';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/update_vehicle_details" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/update_vehicle_details"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-update_vehicle_details">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 56
access-control-allow-origin: *
set-cookie: laravel_session=kPlTd8QsKM70GuqfC3z9lHlcAWjinrpCvob3NW8n; expires=Fri, 19 Jul 2024 14:46:27 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-update_vehicle_details" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-update_vehicle_details"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-update_vehicle_details"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-update_vehicle_details" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-update_vehicle_details">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-update_vehicle_details" data-method="GET"
      data-path="api/update_vehicle_details"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-update_vehicle_details', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-update_vehicle_details"
                    onclick="tryItOut('GETapi-update_vehicle_details');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-update_vehicle_details"
                    onclick="cancelTryOut('GETapi-update_vehicle_details');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-update_vehicle_details"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/update_vehicle_details</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-update_vehicle_details"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-update_vehicle_details"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-vehicle_details">Display the vehicle details</h2>

<p>
</p>



<span id="example-requests-GETapi-vehicle_details">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/vehicle_details';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'vehicle_id' =&gt; 'ad',
            'vehicle_name' =&gt; 'nisi',
            'vehicle_type' =&gt; 'qui',
            'vehicle_number' =&gt; 'eius',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/vehicle_details" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"vehicle_id\": \"ad\",
    \"vehicle_name\": \"nisi\",
    \"vehicle_type\": \"qui\",
    \"vehicle_number\": \"eius\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/vehicle_details"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "vehicle_id": "ad",
    "vehicle_name": "nisi",
    "vehicle_type": "qui",
    "vehicle_number": "eius"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-vehicle_details">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 55
access-control-allow-origin: *
set-cookie: laravel_session=BelsxLNMoJAwwODgXX5VecdgXF7JpM7BsvZd3URh; expires=Fri, 19 Jul 2024 14:46:27 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-vehicle_details" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-vehicle_details"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-vehicle_details"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-vehicle_details" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-vehicle_details">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-vehicle_details" data-method="GET"
      data-path="api/vehicle_details"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-vehicle_details', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-vehicle_details"
                    onclick="tryItOut('GETapi-vehicle_details');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-vehicle_details"
                    onclick="cancelTryOut('GETapi-vehicle_details');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-vehicle_details"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/vehicle_details</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-vehicle_details"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-vehicle_details"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>vehicle_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="vehicle_id"                data-endpoint="GETapi-vehicle_details"
               value="ad"
               data-component="body">
    <br>
<p>Example: <code>ad</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>vehicle_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="vehicle_name"                data-endpoint="GETapi-vehicle_details"
               value="nisi"
               data-component="body">
    <br>
<p>Example: <code>nisi</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>vehicle_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="vehicle_type"                data-endpoint="GETapi-vehicle_details"
               value="qui"
               data-component="body">
    <br>
<p>Example: <code>qui</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>vehicle_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="vehicle_number"                data-endpoint="GETapi-vehicle_details"
               value="eius"
               data-component="body">
    <br>
<p>Example: <code>eius</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-update_rider_location">Update the location of Rider</h2>

<p>
</p>



<span id="example-requests-GETapi-update_rider_location">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/update_rider_location';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/update_rider_location" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/update_rider_location"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-update_rider_location">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 54
access-control-allow-origin: *
set-cookie: laravel_session=cVLpVimjixMOayiP7knujuGZtK94JHLMzXN3rdOL; expires=Fri, 19 Jul 2024 14:46:27 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-update_rider_location" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-update_rider_location"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-update_rider_location"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-update_rider_location" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-update_rider_location">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-update_rider_location" data-method="GET"
      data-path="api/update_rider_location"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-update_rider_location', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-update_rider_location"
                    onclick="tryItOut('GETapi-update_rider_location');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-update_rider_location"
                    onclick="cancelTryOut('GETapi-update_rider_location');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-update_rider_location"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/update_rider_location</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-update_rider_location"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-update_rider_location"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-update_user_currency">To update the currency code for the user</h2>

<p>
</p>



<span id="example-requests-GETapi-update_user_currency">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/update_user_currency';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'currency_code' =&gt; 'doloremque',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/update_user_currency" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"currency_code\": \"doloremque\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/update_user_currency"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "currency_code": "doloremque"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-update_user_currency">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 53
access-control-allow-origin: *
set-cookie: laravel_session=0fNYvs4pRgBRwjLyXQQbhUhgVgi8f3JhSDP2pqu6; expires=Fri, 19 Jul 2024 14:46:27 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-update_user_currency" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-update_user_currency"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-update_user_currency"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-update_user_currency" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-update_user_currency">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-update_user_currency" data-method="GET"
      data-path="api/update_user_currency"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-update_user_currency', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-update_user_currency"
                    onclick="tryItOut('GETapi-update_user_currency');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-update_user_currency"
                    onclick="cancelTryOut('GETapi-update_user_currency');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-update_user_currency"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/update_user_currency</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-update_user_currency"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-update_user_currency"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>currency_code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="currency_code"                data-endpoint="GETapi-update_user_currency"
               value="doloremque"
               data-component="body">
    <br>
<p>Example: <code>doloremque</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-get_caller_detail">GET api/get_caller_detail</h2>

<p>
</p>



<span id="example-requests-GETapi-get_caller_detail">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/get_caller_detail';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'user_id' =&gt; 'et',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/get_caller_detail" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"user_id\": \"et\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/get_caller_detail"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": "et"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-get_caller_detail">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 52
access-control-allow-origin: *
set-cookie: laravel_session=zZhtsd8FpNngDALLtvZuIe1cPlSY5LNwGJQBX1MJ; expires=Fri, 19 Jul 2024 14:46:27 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-get_caller_detail" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-get_caller_detail"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-get_caller_detail"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-get_caller_detail" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-get_caller_detail">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-get_caller_detail" data-method="GET"
      data-path="api/get_caller_detail"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-get_caller_detail', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-get_caller_detail"
                    onclick="tryItOut('GETapi-get_caller_detail');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-get_caller_detail"
                    onclick="cancelTryOut('GETapi-get_caller_detail');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-get_caller_detail"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/get_caller_detail</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-get_caller_detail"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-get_caller_detail"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="user_id"                data-endpoint="GETapi-get_caller_detail"
               value="et"
               data-component="body">
    <br>
<p>Example: <code>et</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-vehicle_descriptions">GET api/vehicle_descriptions</h2>

<p>
</p>



<span id="example-requests-GETapi-vehicle_descriptions">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/vehicle_descriptions';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/vehicle_descriptions" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/vehicle_descriptions"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-vehicle_descriptions">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 51
access-control-allow-origin: *
set-cookie: laravel_session=iZRB87snY9Z3cpWkjMSZAZs3JHNM6lw1UNTy2pvg; expires=Fri, 19 Jul 2024 14:46:27 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-vehicle_descriptions" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-vehicle_descriptions"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-vehicle_descriptions"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-vehicle_descriptions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-vehicle_descriptions">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-vehicle_descriptions" data-method="GET"
      data-path="api/vehicle_descriptions"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-vehicle_descriptions', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-vehicle_descriptions"
                    onclick="tryItOut('GETapi-vehicle_descriptions');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-vehicle_descriptions"
                    onclick="cancelTryOut('GETapi-vehicle_descriptions');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-vehicle_descriptions"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/vehicle_descriptions</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-vehicle_descriptions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-vehicle_descriptions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-add_card_details">API for create a customer id  based on card details using stripe payment gateway</h2>

<p>
</p>



<span id="example-requests-GETapi-add_card_details">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/add_card_details';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'intent_id' =&gt; 'culpa',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/add_card_details" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"intent_id\": \"culpa\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/add_card_details"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "intent_id": "culpa"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-add_card_details">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 50
access-control-allow-origin: *
set-cookie: laravel_session=uPN6OuI7T8WSDohF8z9xAbf0XjZFUdJjPOEnkIKi; expires=Fri, 19 Jul 2024 14:46:27 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-add_card_details" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-add_card_details"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-add_card_details"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-add_card_details" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-add_card_details">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-add_card_details" data-method="GET"
      data-path="api/add_card_details"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-add_card_details', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-add_card_details"
                    onclick="tryItOut('GETapi-add_card_details');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-add_card_details"
                    onclick="cancelTryOut('GETapi-add_card_details');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-add_card_details"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/add_card_details</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-add_card_details"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-add_card_details"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>intent_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="intent_id"                data-endpoint="GETapi-add_card_details"
               value="culpa"
               data-component="body">
    <br>
<p>Example: <code>culpa</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-get_card_details">API for payment card details</h2>

<p>
</p>



<span id="example-requests-GETapi-get_card_details">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/get_card_details';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/get_card_details" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/get_card_details"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-get_card_details">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 49
access-control-allow-origin: *
set-cookie: laravel_session=qYUgJLWYaUlWknP3ajtDmpHhY4NjiWAyaoXCkg8T; expires=Fri, 19 Jul 2024 14:46:27 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-get_card_details" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-get_card_details"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-get_card_details"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-get_card_details" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-get_card_details">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-get_card_details" data-method="GET"
      data-path="api/get_card_details"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-get_card_details', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-get_card_details"
                    onclick="tryItOut('GETapi-get_card_details');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-get_card_details"
                    onclick="cancelTryOut('GETapi-get_card_details');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-get_card_details"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/get_card_details</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-get_card_details"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-get_card_details"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-stripe_supported_country_list">Display Country List</h2>

<p>
</p>



<span id="example-requests-GETapi-stripe_supported_country_list">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/stripe_supported_country_list';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/stripe_supported_country_list" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/stripe_supported_country_list"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-stripe_supported_country_list">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 48
access-control-allow-origin: *
set-cookie: laravel_session=qMIN7cE4Un1X9HkMgerAislvq7rQwKjzEeSzVYlU; expires=Fri, 19 Jul 2024 14:46:28 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-stripe_supported_country_list" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-stripe_supported_country_list"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-stripe_supported_country_list"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-stripe_supported_country_list" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-stripe_supported_country_list">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-stripe_supported_country_list" data-method="GET"
      data-path="api/stripe_supported_country_list"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-stripe_supported_country_list', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-stripe_supported_country_list"
                    onclick="tryItOut('GETapi-stripe_supported_country_list');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-stripe_supported_country_list"
                    onclick="cancelTryOut('GETapi-stripe_supported_country_list');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-stripe_supported_country_list"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/stripe_supported_country_list</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-stripe_supported_country_list"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-stripe_supported_country_list"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-update_payout_preference">Add payout Preferences</h2>

<p>
</p>



<span id="example-requests-POSTapi-update_payout_preference">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/update_payout_preference';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://rideinjune.test/api/update_payout_preference" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/update_payout_preference"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-update_payout_preference">
</span>
<span id="execution-results-POSTapi-update_payout_preference" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-update_payout_preference"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-update_payout_preference"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-update_payout_preference" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-update_payout_preference">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-update_payout_preference" data-method="POST"
      data-path="api/update_payout_preference"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-update_payout_preference', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-update_payout_preference"
                    onclick="tryItOut('POSTapi-update_payout_preference');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-update_payout_preference"
                    onclick="cancelTryOut('POSTapi-update_payout_preference');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-update_payout_preference"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/update_payout_preference</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-update_payout_preference"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-update_payout_preference"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>payout_method</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="payout_method"                data-endpoint="POSTapi-update_payout_preference"
               value=""
               data-component="body">
    <br>

        </div>
        </form>

                    <h2 id="endpoints-GETapi-get_payout_list">Get payout Preferences</h2>

<p>
</p>



<span id="example-requests-GETapi-get_payout_list">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/get_payout_list';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/get_payout_list" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/get_payout_list"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-get_payout_list">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 47
access-control-allow-origin: *
set-cookie: laravel_session=WbrcoraIzn3ol2flO1zSg3o6kUtxXF2lzXUwQyre; expires=Fri, 19 Jul 2024 14:46:28 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-get_payout_list" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-get_payout_list"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-get_payout_list"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-get_payout_list" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-get_payout_list">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-get_payout_list" data-method="GET"
      data-path="api/get_payout_list"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-get_payout_list', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-get_payout_list"
                    onclick="tryItOut('GETapi-get_payout_list');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-get_payout_list"
                    onclick="cancelTryOut('GETapi-get_payout_list');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-get_payout_list"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/get_payout_list</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-get_payout_list"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-get_payout_list"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-earning_list">View Over All Payout Details of driver</h2>

<p>
</p>



<span id="example-requests-GETapi-earning_list">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/earning_list';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'type' =&gt; 'weekly',
            'start_date' =&gt; '2024-07-19',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/earning_list" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"type\": \"weekly\",
    \"start_date\": \"2024-07-19\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/earning_list"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "type": "weekly",
    "start_date": "2024-07-19"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-earning_list">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 46
access-control-allow-origin: *
set-cookie: laravel_session=oBKsP6tqAYoGUVHNaUzud3ga502FSGHjcWFXc1Vm; expires=Fri, 19 Jul 2024 14:46:28 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-earning_list" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-earning_list"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-earning_list"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-earning_list" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-earning_list">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-earning_list" data-method="GET"
      data-path="api/earning_list"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-earning_list', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-earning_list"
                    onclick="tryItOut('GETapi-earning_list');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-earning_list"
                    onclick="cancelTryOut('GETapi-earning_list');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-earning_list"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/earning_list</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-earning_list"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-earning_list"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="type"                data-endpoint="GETapi-earning_list"
               value="weekly"
               data-component="body">
    <br>
<p>Example: <code>weekly</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>week</code></li> <li><code>weekly</code></li> <li><code>date</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>start_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="start_date"                data-endpoint="GETapi-earning_list"
               value="2024-07-19"
               data-component="body">
    <br>
<p>Must be a valid date. Must be a valid date in the format <code>Y-m-d</code>. Example: <code>2024-07-19</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-weekly_trip">View Weekly Payout Details of Driver</h2>

<p>
</p>



<span id="example-requests-GETapi-weekly_trip">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/weekly_trip';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/weekly_trip" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/weekly_trip"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-weekly_trip">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 45
access-control-allow-origin: *
set-cookie: laravel_session=oWgTu5OicbxWHDSHPHaul8wuqWVgR5Dp8Thhsaz0; expires=Fri, 19 Jul 2024 14:46:28 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-weekly_trip" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-weekly_trip"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-weekly_trip"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-weekly_trip" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-weekly_trip">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-weekly_trip" data-method="GET"
      data-path="api/weekly_trip"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-weekly_trip', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-weekly_trip"
                    onclick="tryItOut('GETapi-weekly_trip');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-weekly_trip"
                    onclick="cancelTryOut('GETapi-weekly_trip');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-weekly_trip"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/weekly_trip</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-weekly_trip"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-weekly_trip"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-weekly_statement">View Week Day Payout Details of Driver</h2>

<p>
</p>



<span id="example-requests-GETapi-weekly_statement">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/weekly_statement';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/weekly_statement" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/weekly_statement"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-weekly_statement">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 44
access-control-allow-origin: *
set-cookie: laravel_session=ULwLM3NzFlncy4q2KZksRTaWxTdTVqYxpUOmxAuA; expires=Fri, 19 Jul 2024 14:46:28 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-weekly_statement" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-weekly_statement"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-weekly_statement"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-weekly_statement" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-weekly_statement">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-weekly_statement" data-method="GET"
      data-path="api/weekly_statement"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-weekly_statement', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-weekly_statement"
                    onclick="tryItOut('GETapi-weekly_statement');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-weekly_statement"
                    onclick="cancelTryOut('GETapi-weekly_statement');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-weekly_statement"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/weekly_statement</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-weekly_statement"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-weekly_statement"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-daily_statement">View Daily Payout Details of Driver</h2>

<p>
</p>



<span id="example-requests-GETapi-daily_statement">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/daily_statement';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/daily_statement" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/daily_statement"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-daily_statement">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 43
access-control-allow-origin: *
set-cookie: laravel_session=ySSVXdGuKv8wWXARA0ZkNxxjnqaGw1hMzVJWgu6f; expires=Fri, 19 Jul 2024 14:46:28 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-daily_statement" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-daily_statement"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-daily_statement"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-daily_statement" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-daily_statement">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-daily_statement" data-method="GET"
      data-path="api/daily_statement"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-daily_statement', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-daily_statement"
                    onclick="tryItOut('GETapi-daily_statement');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-daily_statement"
                    onclick="cancelTryOut('GETapi-daily_statement');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-daily_statement"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/daily_statement</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-daily_statement"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-daily_statement"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-update_vehicle">POST api/update_vehicle</h2>

<p>
</p>



<span id="example-requests-POSTapi-update_vehicle">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/update_vehicle';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'vehicle_type' =&gt; 'nisi',
            'make_id' =&gt; 'laudantium',
            'model_id' =&gt; 'et',
            'year' =&gt; 'explicabo',
            'color' =&gt; 'delectus',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://rideinjune.test/api/update_vehicle" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"vehicle_type\": \"nisi\",
    \"make_id\": \"laudantium\",
    \"model_id\": \"et\",
    \"year\": \"explicabo\",
    \"color\": \"delectus\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/update_vehicle"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "vehicle_type": "nisi",
    "make_id": "laudantium",
    "model_id": "et",
    "year": "explicabo",
    "color": "delectus"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-update_vehicle">
</span>
<span id="execution-results-POSTapi-update_vehicle" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-update_vehicle"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-update_vehicle"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-update_vehicle" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-update_vehicle">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-update_vehicle" data-method="POST"
      data-path="api/update_vehicle"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-update_vehicle', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-update_vehicle"
                    onclick="tryItOut('POSTapi-update_vehicle');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-update_vehicle"
                    onclick="cancelTryOut('POSTapi-update_vehicle');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-update_vehicle"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/update_vehicle</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-update_vehicle"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-update_vehicle"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>vehicle_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="vehicle_type"                data-endpoint="POSTapi-update_vehicle"
               value="nisi"
               data-component="body">
    <br>
<p>Example: <code>nisi</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>make_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="make_id"                data-endpoint="POSTapi-update_vehicle"
               value="laudantium"
               data-component="body">
    <br>
<p>Example: <code>laudantium</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>model_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="model_id"                data-endpoint="POSTapi-update_vehicle"
               value="et"
               data-component="body">
    <br>
<p>Example: <code>et</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>year</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="year"                data-endpoint="POSTapi-update_vehicle"
               value="explicabo"
               data-component="body">
    <br>
<p>Example: <code>explicabo</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>color</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="color"                data-endpoint="POSTapi-update_vehicle"
               value="delectus"
               data-component="body">
    <br>
<p>Example: <code>delectus</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-delete_vehicle">POST api/delete_vehicle</h2>

<p>
</p>



<span id="example-requests-POSTapi-delete_vehicle">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/delete_vehicle';
$response = $client-&gt;post(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://rideinjune.test/api/delete_vehicle" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/delete_vehicle"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-delete_vehicle">
</span>
<span id="execution-results-POSTapi-delete_vehicle" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-delete_vehicle"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-delete_vehicle"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-delete_vehicle" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-delete_vehicle">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-delete_vehicle" data-method="POST"
      data-path="api/delete_vehicle"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-delete_vehicle', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-delete_vehicle"
                    onclick="tryItOut('POSTapi-delete_vehicle');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-delete_vehicle"
                    onclick="cancelTryOut('POSTapi-delete_vehicle');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-delete_vehicle"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/delete_vehicle</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-delete_vehicle"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-delete_vehicle"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-update_default_vehicle">GET api/update_default_vehicle</h2>

<p>
</p>



<span id="example-requests-GETapi-update_default_vehicle">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$url = 'http://rideinjune.test/api/update_default_vehicle';
$response = $client-&gt;get(
    $url,
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://rideinjune.test/api/update_default_vehicle" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://rideinjune.test/api/update_default_vehicle"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-update_default_vehicle">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 120
x-ratelimit-remaining: 42
access-control-allow-origin: *
set-cookie: laravel_session=bcbFCvcgPhEBTT2N5lkktzyenN1TDjpkTXGSqU5E; expires=Fri, 19 Jul 2024 14:46:28 GMT; Max-Age=7200; path=/; httponly
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Authorization Token not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-update_default_vehicle" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-update_default_vehicle"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-update_default_vehicle"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-update_default_vehicle" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-update_default_vehicle">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-update_default_vehicle" data-method="GET"
      data-path="api/update_default_vehicle"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-update_default_vehicle', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-update_default_vehicle"
                    onclick="tryItOut('GETapi-update_default_vehicle');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-update_default_vehicle"
                    onclick="cancelTryOut('GETapi-update_default_vehicle');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-update_default_vehicle"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/update_default_vehicle</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-update_default_vehicle"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-update_default_vehicle"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="php">php</button>
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
