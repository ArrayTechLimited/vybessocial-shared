<?php

namespace VybesSocial\Shared\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    use HasFactory;


    protected $fillable = [
        'amount',
        'reference',
        'status',
        'wallet_id',

    ];

    public function wallet()
    {
        return $this->belongsTo(Wallet::class);
    }
}
