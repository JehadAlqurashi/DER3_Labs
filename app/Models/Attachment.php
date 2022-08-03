<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Attachment extends Model{


    protected $fillable = [
        'challenge_id',
        'filename',
        'url'
    ];

    public function challenge()
    {
        return $this->belongsTo('App\Models\Challenge', 'challenge_id');
    }



}

