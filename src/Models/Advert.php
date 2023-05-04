<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    use HasFactory;

    protected $fillable = [
        'advert_name',
        'advert_description',
        'task_id',
    ];

    public function platforms()
    {
        return $this->belongsToMany(Platform::class);
    }

    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    public function earn()
    {
        return $this->hasOne(Earn::class);
    }
}
