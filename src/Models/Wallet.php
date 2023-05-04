<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    protected $fillable = [
        'opening_balance',
        'user_id'
    ];
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function deposits()
    {
        return $this->hasMany(Deposit::class);
    }

    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }

    public function withdrawals()
    {
        return $this->hasMany(Withdrawal::class);
    }

    public function productAdverts()
    {
        return $this->hasOne(ProductAdvert::class);
    }
}
