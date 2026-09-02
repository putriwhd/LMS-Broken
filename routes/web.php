<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/courses/{id}/delete', [CourseController::class, 'destroy'])->name('courses.destroy.broken');

Route::get('/courses/{id}', [CourseController::class, 'show'])->name('courses.show');
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create');

Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');
