<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::middleware('guest')->group(function() {

    Route::get('/login',[AuthController::class, 'index'])->name("site.index");
    Route::get("/login/show", [AuthController::class, 'login'])->name("site.login");

});



