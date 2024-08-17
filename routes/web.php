<?php

use App\Http\Controllers\UserTypeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\advisorController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::resource("/projects",ProjectController::class);
Route::resource("/advisor",advisorController::class);

Route::get('registration', function(){
    return view('registration');
});

Route::get('/', function(){
    return view('home');
});



