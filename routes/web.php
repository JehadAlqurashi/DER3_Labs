<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", function (){
    return view("home");
})->name("homepage");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get("/score",[Controllers\ScoreController::class,"index"])->name("score")->middleware("auth");
Route::group(['prefix'=>"dashboard"],function(){
    Route::get("/",[Controllers\DashboardController::class,"index"]);

    ###################### users #######################
    Route::get("/users",[Controllers\DashboardController::class,"users"])->name("dashboard.users"); // to show users
    Route::get("/user/{id}",[Controllers\DashboardController::class,"edit"])->name("dashboard.users.edit");
    ROUTE::post("/user/edit/{id}",[Controllers\DashboardController::class,"editing"])->name("dashboard.users.editing");
    ###################### users #######################

    ###################### challenges #######################
    Route::get("/challenge",[Controllers\DashboardController::class,"challenge"])->name("dashboard.challenge");
    Route::get("/challenge/{id}",[Controllers\DashboardController::class,"challEdit"])->name("dashboard.challenge.edit");

    ###################### challenges #######################
})



?>
