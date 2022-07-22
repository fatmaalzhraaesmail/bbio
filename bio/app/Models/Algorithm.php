<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Algorithm extends Model
{
    use HasFactory;
    protected $table='algorithms';
    protected $primaryKey='id';
    protected $fillable=['algorithm_name','image','algorithm_info'];
    // public function comments(){
    //     return $this->hasMany(Comment::class);
    // }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
