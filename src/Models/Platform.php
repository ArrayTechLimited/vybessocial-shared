<?php

namespace VybesSocial\Shared\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    use HasFactory;

    protected $fillable = [
        'platform_name',
        'platform_icon',
    ];

    public function tasks()
    {
        return $this->belongsToMany(Task::class);
    }

    public function adverts()
    {
        return $this->belongsToMany(Advert::class);
    }
}
