<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Solved extends Model{

    protected $table = 'solved';

    protected $fillable = [
        'challenge_id',
        'user_id'
    ];
}

