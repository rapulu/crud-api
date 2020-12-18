<?php

use App\Http\Controllers\TodoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('todos', [TodoController::class, 'all']);

Route::post('todo', [TodoController::class, 'create']);

Route::get('todos/{id}', [TodoController::class, 'get']);

Route::put('todos/{id}', [TodoController::class, 'update']);

Route::delete('todos/{id}', [TodoController::class, 'delete']);
