<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solve extends Model
{
    use HasFactory;
    protected $table = "solved";
    protected $fillable = ['id', 'challenge_id', 'user_id'];


    /* public function user(){
        return $this->hasMany('App\Models\User', 'user_id');
    }
    public function challenge(){
        return $this->hasMany('App\Models\Challenge', 'challenge_id');
    } */

}
