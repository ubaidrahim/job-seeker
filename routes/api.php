<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => ['auth:sanctum']], function () {
    
    Route::get('/jobs/{search?}', [App\Http\Controllers\JobController::class, 'index']);
    Route::get('/job/{id}', [App\Http\Controllers\JobController::class, 'show']);
    Route::post('/jobs', [App\Http\Controllers\JobController::class, 'store'])->middleware('can:add-job');
    Route::put('/jobs/{id}', [App\Http\Controllers\JobController::class, 'update'])->middleware('can:update-job,App\Models\Job');
    
    Route::post('/logout', [App\Http\Controllers\UserController::class, 'logout']);
});

Route::post('/seeker/register', [App\Http\Controllers\UserController::class, 'seeker_register']);
Route::post('/employer/register', [App\Http\Controllers\UserController::class, 'employer_register']);
Route::post('/login', [App\Http\Controllers\UserController::class, 'login']);

