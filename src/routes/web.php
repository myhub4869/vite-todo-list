<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\TopController;
use Illuminate\Support\Facades\Route;

Route::get("/user/login", [LoginController::class, "form"])->name("login");
Route::post("/user/login", [LoginController::class, "excute"])->name("login.excute");
Route::post("/user/logout", LogoutController::class)->name("logout");

Route::middleware('auth')->group(function () {
    Route::get("/", TopController::class)->name("top");
});
