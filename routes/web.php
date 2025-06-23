<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AsignatureController;
use App\Http\Controllers\NoteController;

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

Route::get('/notes', [NoteController::class, 'index'])->name('notes.index');
Route::post('/notes', [NoteController::class, 'store'])->name('notes.store');
Route::get('/notes/{id}', [NoteController::class, 'edit'])->name('notes.edit');
Route::put('/notes/{id}', [NoteController::class, 'update'])->name('notes.update');
Route::delete('/notes/{id}', [NoteController::class, 'destroy'])->name('notes.destroy');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
