<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ["user_id"];

    public function user(){
        return $this->belongsTo(user::class);
    }

    public function game(){
        return $this->belongsTo(game::class);
    }
}
