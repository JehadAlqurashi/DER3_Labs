<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Solve;
use Illuminate\Http\Request;

class FlagController extends Controller
{
    public function flag(Request $request){
        $s  = Solve::with(['user_id' => function ($q){
            $q->all();
        }])->first("1");
        return $s;
    }
}
