<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [UserController::class,"index1"]);

Route::get('register', [UserController::class,"index2"]);







