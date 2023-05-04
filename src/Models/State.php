<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    public function Lgas()
    {
        return $this->hasMany(Lga::class);
    }

    // public function product()
    // {
    //     return $this->hasMany(Product::class);
    // }
}
