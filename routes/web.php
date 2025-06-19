<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/students',[StudentController::class, 'index'])->name('students.index');
Route::post('/students',[StudentController::class, 'store'])->name('students.store');
Route::delete('/students/{id}',[StudentController::class, 'destroy'])->name('students.destroy');

