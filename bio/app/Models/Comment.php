<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public function book(){
        return $this->belongsTo(Book::class);
    }

    public function user (){
        return $this->belongsTo('App\Models\User');
    }
}
