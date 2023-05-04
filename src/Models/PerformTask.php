<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerformTask extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'earn_id',
        'task_id',
        'user_id',
        'image_screenshot',
        'social_media_username',
        'status',
    ];


    /**
     * Prepare a date for array / JSON serialization.
     *
     * @param  \DateTimeInterface  $date
     * @return string
     */
    protected function serializeDate(\DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function earns()
    {
        return $this->belongsTo(Earn::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function platform()
    {
        return $this->belongsTo(Platform::class);
    }
}
