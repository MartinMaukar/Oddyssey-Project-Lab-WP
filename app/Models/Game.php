<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(category::class);
    }

    public function cart(){
        return $this->hasMany(cart::class);
    }

    public function review(){
        return $this->hasMany(review::class);
    }

    public function transaction(){
        return $this->hasMany(transaction::class);
    }
}
