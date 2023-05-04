<?php

namespace VybesSocial\Shared\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_id',
        'state_id',
        'lga_id',
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
