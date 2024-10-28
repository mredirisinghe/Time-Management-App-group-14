<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/token', function () { return csrf_token(); });
Route::post('employee', [EmployeeController::class, 'store']); 
Route::get('employee/all', [EmployeeController::class, 'all']);
Route::get('employee/{id}/edit', [EmployeeController::class, 'edit']); 
Route::post('employee/{id}', [EmployeeController::class, 'update']); 
Route::delete('employee/{id}', [EmployeeController::class, 'delete']);
