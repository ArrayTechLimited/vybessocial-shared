<?php

namespace VybesSocial\Shared\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'referrer_id',
        'name',
        'email',
        'username',
        'phone_number',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function location()
    {
        return $this->hasOneThrough(Location::class, Profile::class);
    }

    public function following()
    {
        return $this->belongsToMany(Profile::class);
    }

    /**
     * A user has many products
     */

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    /**
     * A user has many comments
     */

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * A user has one profile
     */

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    /**
     * A user has a referrer
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function referrer()
    {
        return $this->belongsTo(User::class, 'referrer_id', 'id');
    }

    /**
     * A user has many referrerals
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function referrerals()
    {
        return $this->hasMany(User::class, 'referrer_id', 'id');
    }

    /**
     * A user has many earns
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function earns()
    {
        return $this->hasMany(Earn::class);
    }

    public function wallet()
    {
        return $this->hasOne(Wallet::class);
    }

    public function deposits()
    {
        return $this->hasManyThrough(Deposit::class, Wallet::class);
    }

    public function withdrawals()
    {
        return $this->hasManyThrough(Withdrawal::class, Wallet::class);
    }

    public function membership()
    {
        return $this->hasOne(Membership::class);
    }

    public function performTasks()
    {
        return $this->hasMany(PerformTask::class);
    }

    public function productAdverts()
    {
        return $this->hasMany(ProductAdvert::class);
    }

    // public function products()
    // {
    //     return $this->belongsToMany(Product::class);
    // }
}
