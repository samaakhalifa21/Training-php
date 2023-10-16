<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/exam',[ExamController::class,'index']);
Route::post('/exam',[ExamController::class,'store']);
Route::post('/exam/{id}',[ExamController::class,'show']);
Route::put('/exam/{id}/update',[ExamController::class,'update']);
Route::delete('/exam/{id}/delete',[ExamController::class,'delete']);