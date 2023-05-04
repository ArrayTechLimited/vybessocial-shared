<?php

namespace VybesSocial\Shared\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ProfileUser extends Pivot
{
    protected $fillable = [
        'user_id',
        'profile_id'
    ];
}
