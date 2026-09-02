<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// CACAT #2: Route Delete menggunakan HTTP Method GET
Route::get('/courses/{id}/delete', [CourseController::class, 'destroy'])->name('courses.destroy.broken');

// CACAT #1: Route Wildcard ditaruh SEBELUM route statis /courses/create
Route::get('/courses/{id}', [CourseController::class, 'show'])->name('courses.show');
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create');

Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');
