<?php

namespace VybesSocial\Shared\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'bio',
        'gender',
        'profile_image',
        'dob',
        'religion',
        'stage',
        'user_id',
    ];
    use HasFactory;

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
