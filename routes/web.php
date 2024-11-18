<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/token', function () { return csrf_token(); });
Route::post('time', [TimeController::class, 'store']); 
Route::get('time/all', [TimeController::class, 'all']);
Route::get('time/{id}/edit', [TimeController::class, 'edit']); 
Route::post('time/{id}', [TimeController::class, 'update']); 
Route::delete('time/{id}', [TimeController::class, 'delete']);
