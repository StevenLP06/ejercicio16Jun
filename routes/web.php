<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/students',[StudentController::class, 'index'])->name('students.index');
Route::post('/students',[StudentController::class, 'store'])->name('students.store');
Route::get('/students/{id}', [StudentController::class, 'edit'])->name('students.edit');
Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update');
Route::delete('/students/{id}',[StudentController::class, 'destroy'])->name('students.destroy');

