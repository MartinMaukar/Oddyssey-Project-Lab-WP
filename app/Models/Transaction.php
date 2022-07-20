<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ["user_id","game_id"];

    public function user(){
        return $this->belongsTo(user::class);
    }

    public function game(){
        return $this->belongsTo(game::class);
    }

    use HasFactory;
}
