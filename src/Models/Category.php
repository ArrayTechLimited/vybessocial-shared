<?php

namespace VybesSocial\Shared\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function subCategories()
    {
        return $this->hasMany(SubCategory::class);
    }

    public function superCategory()
    {
        return $this->belongsTo(SuperCategory::class);
    }
}
