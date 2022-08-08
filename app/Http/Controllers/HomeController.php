<?php

namespace App\Http\Controllers;
use App\Models\Challenge;
use http\Client\Curl\User;
use App\Models\User as UserLogin;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $chall = Challenge::select("id","title","score","description","category","hint","difficulty","link")->get();
        $user = UserLogin::select("id")->with(['solve'=>function($q){
            $q->select("challenge_id","user_id");
        }])->whereId(Auth::id())->first();
        return view("dashboard",compact("chall","user"));
    }

    public function admin()
    {
        return view ("admin");
    }
    public function redirecting($id){
        $link = Challenge::whereId("$id")->value("link");
        return redirect()->away($link);

    }

}
