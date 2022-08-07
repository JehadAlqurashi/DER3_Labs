<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Challenge extends Model{

    protected $table = 'challenges';

    protected $fillable = [
        'score',
        'title',
        'flag',
        'description',
        'category',
        'hint',
        'difficulty',
        'link'
    ];

    public function chall (){
        return $this->hasMany("App\Models\Solve","challenge_id");

    }



}

