<?php

namespace VybesSocial\Shared\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        // 'product_image',
        'title',
        'quantity',
        'price',
        'discount_price',
        'description',
        'youtube_link',
        'super_category_id',
        'category_id',
        'sub_category_id',
        'address',
        'state_name',
        'lga_name',
        'user_id',
        'wallet_id',
        'status',
        'views',
        'likes'
    ];

    use HasFactory;

    // public function categories()
    // {
    //     return $this->hasManyThrough(Category::class, SuperCategory::class);
    // }

    // public function subCategories()
    // {
    //     return $this->hasManyThrough(SubCategory::class, Category::class);
    // }

    public function superCategory()
    {
        return $this->belongsTo(SuperCategory::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function productAdverts()
    {
        return $this->hasOne(ProductAdvert::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }


    public function productImages()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function setViewsAttribute()
    {
        $this->attributes['views'] = $this->attributes['views'] + 1;
    }

    // public function users()
    // {
    //     return $this->belongsToMany(User::class);
    // }

    // public function state()
    // {
    //     return $this->belongsTo(State::class);
    // }

    // public function lga()
    // {
    //     return $this->belongsTo(Lga::class);
    // }
}
