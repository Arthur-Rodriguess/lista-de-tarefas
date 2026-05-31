<?php

use App\Http\Controllers\CompleteTaskController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', [TaskController::class, 'index']);
Route::get('/tasks/create', [TaskController::class, 'create']);
Route::post('/tasks/save', [TaskController::class, 'store']);
Route::delete('/tasks/{id}', [TaskController::class, 'destroy']);
Route::post('/tasks/{task}', CompleteTaskController::class);