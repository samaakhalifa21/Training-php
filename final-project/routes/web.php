<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
  //  return view('welcome');
//});

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/home' , [HomeController::class , 'index'])
//->name('home');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home1');
Route::get('/course' , [CourseController::class , 'index'])
->name('course.index');
Route::post('/course/store' , [CourseController::class , 'store'])
->name('course.store');
Route::get('/course/create' , [CourseController::class , 'create'])
->name('course.create');
Route::get('/course/{course}/edit' , [CourseController::class , 'edit'])
->name('course.edit');
Route::put('/course/{course}/update' , [CourseController::class , 'update'])
->name('course.update');
Route::get('/course/{course}/deleted' , [CourseController::class , 'destroy'])
->name('course.delete');
Route::get('/course/{course}/show' , [CourseController::class , 'show'])
->name('course.show');










