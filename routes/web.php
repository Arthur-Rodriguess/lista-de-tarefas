<?php

use App\Http\Controllers\CompleteTaskController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return to_route("tasks.index");
});

Route::resource('/tasks', TaskController::class)->except(['show']);

Route::post('/tasks/{task}', CompleteTaskController::class)->name("tasks.conclude");