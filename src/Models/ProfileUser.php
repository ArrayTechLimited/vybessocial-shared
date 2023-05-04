<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ProfileUser extends Pivot
{
    protected $fillable = [
        'user_id',
        'profile_id'
    ];
}