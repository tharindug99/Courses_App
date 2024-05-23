<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/courses', [CourseController::class,'index'])->name('course.index');
Route::get('/courses/add', [CourseController::class,'create'])->name('course.create');
Route::post('/courses', [CourseController::class,'store'])->name('course.store');


//Get the edit page
Route::get('/courses/{course}/edit', [CourseController::class,'edit'])->name('course.edit');
Route::put('/courses/{course}', [CourseController::class,'update'])->name('course.update');

// Show course details
Route::get('/courses/{course}/show', [CourseController::class,'show'])->name('course.show');

// Delete course 
Route::delete('/courses/{course}', [CourseController::class,'destroy'])->name('course.destroy');