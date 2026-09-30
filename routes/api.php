<?php

use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
// Route::post('task',[TaskController::class,'store']);
// Route::get('task',[TaskController::class,'index']);
// Route::get('task/{id}',[TaskController::class,'show']);
// Route::put('task/{id}',[TaskController::class,'update']);
// Route::delete('task/{id}',[TaskController::class,'destroy']);

Route::apiResource('task', TaskController::class);
Route::post('profile', [ProfileController::class, 'store']);
