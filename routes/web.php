<?php

use App\Http\Controllers\CompleteTaskController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/tasks', TaskController::class);

Route::post('/tasks/{task}', CompleteTaskController::class);