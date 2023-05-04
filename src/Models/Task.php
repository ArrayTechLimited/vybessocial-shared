<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_name',
        'task_type',
        'task_earning',
        'task_earning_action',
        'task_description',
        'task_icon',
        'task_service_charge'
    ];

    public function earns()
    {
        return $this->hasMany(Earn::class);
    }

    public function platforms()
    {
        return $this->belongsToMany(Platform::class);
    }

    public function adverts()
    {
        return $this->hasMany(Advert::class);
    }
}
