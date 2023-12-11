<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    //One-One Relationship
    public function user(){
        return $this->belongsTo(User::class);
    }
}
