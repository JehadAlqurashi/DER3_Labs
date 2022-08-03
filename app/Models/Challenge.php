<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Challenge extends Model{

    protected $table = 'challenges';

    protected $fillable = [
        'score',
        'title',
        'flag'
    ];

    public function attachments(){

        return $this->belongsTo('App\Models\Attachment');
    }



}

