<?php

namespace App\Http\Controllers;
use App\Models\Challenge;
use http\Client\Curl\User;
use Illuminate\Http\Request;

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

        return view("dashboard",compact("chall"));
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
