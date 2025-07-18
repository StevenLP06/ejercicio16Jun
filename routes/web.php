<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AsignatureController;

Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::post('/students', [StudentController::class, 'store'])->name('students.store');
Route::get('/students/{id}', [StudentController::class, 'edit'])->name('students.edit');
Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update');
Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');

Route::get('/asignatures', [AsignatureController::class, 'index'])->name('asignatures.index');
Route::post('/asignatures', [AsignatureController::class, 'store'])->name('asignatures.store');
Route::get('/asignatures/{id}', [AsignatureController::class, 'edit'])->name('asignatures.edit');
Route::put('/asignatures/{id}', [AsignatureController::class, 'update'])->name('asignatures.update');
Route::delete('/asignatures/{id}', [AsignatureController::class, 'destroy'])->name('asignatures.destroy');