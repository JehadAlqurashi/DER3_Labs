<?php

namespace App\Http\Controllers;
use App\Models\Challenge;
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
        $chall = Challenge::select("title","score","description","category","hint")->get();
        return view("dashboard",compact("chall"));
    }

    public function admin()
    {
        return view ("admin");
    }
}
