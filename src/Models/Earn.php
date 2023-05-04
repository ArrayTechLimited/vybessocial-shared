<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Earn extends Model
{
    use HasFactory;

    protected $fillable = [
        'social_platform',
        'no_of_advert',
        'gender',
        'location',
        'religion',
        'link',
        'social_media_post',
        'advert_sample_text',
        'advert_media',
        'payment_status',
        'amount',
        'reference',
        'task_id',
        'user_id',
        'wallet_id',
    ];

    public function advert()
    {
        return $this->belongsTo(Advert::class);
    }

    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function performTasks()
    {
        return $this->hasMany(PerformTask::class);
    }
}
