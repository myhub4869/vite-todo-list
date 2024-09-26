<?php

use App\Http\Controllers\TodoComplatedController;
use App\Http\Controllers\TodoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('todos', TodoController::class)->except("show");
    Route::put('todos/complated/{todo}', [TodoComplatedController::class, 'complated'])->name("todo.complated");
});
