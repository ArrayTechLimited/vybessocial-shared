<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuperCategory extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->hasOne(Product::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    /**
     * Relationship with sub category
     */

    public function subCategories()
    {
        return $this->hasManyThrough(SubCategory::class, Category::class);
    }
}
