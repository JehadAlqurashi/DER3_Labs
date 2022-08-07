<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Solve extends Model
{
    use HasFactory;
    protected $table = "solved";
    protected $fillable = ['id', 'challenge_id', 'user_id'];


    public function user(){
        return $this->belongsTo("App\Models\User","user_id");

    }
    public function chall(){
        return $this->belongsTo("App\Models\Challenge","challenge_id");
    }


}
