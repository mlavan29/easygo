<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{

    protected $fillable = ['user_id', 'amount', 'tel', 'status','applied_referral_amount', 'payment_purpose', 'payment_method', 'reference', 'transaction_id', 'momo_transaction_id','is_charges'];

    protected $table = 'transactions';

    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
