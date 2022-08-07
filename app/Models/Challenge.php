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

     /*public function attachments(){

        return $this->belongsTo('App\Models\Attachment');
    }

    /* public function solved(){
        return $this->belongsTo('App\Models\Solve', 'challenge_id');
    } */



}

