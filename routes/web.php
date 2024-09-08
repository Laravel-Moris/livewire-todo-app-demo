<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/todo', [TodoController::class, 'index'])
     ->name('todos.index');

Route::post('/todo', [TodoController::class, 'store'])
    ->name('todos.store');

Route::delete('/todo/{todo}', [TodoController::class, 'destroy'])
    ->name('todos.destroy');

Route::view('/todo-livewire', 'todos');
