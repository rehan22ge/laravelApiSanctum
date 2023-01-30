<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->group(function () {

    Route::resource('/students', StudentController::class);
    Route::get('/search/{city}' , [StudentController::class , 'search'] ); 
    Route::post('/logout' , [UserController::class , 'logout']);

});

Route::post('/register' , [UserController::class , 'register'] );
Route::post('/login' , [UserController::class , 'login'] );

// Route::middleware('auth:sanctum')->get('/students', [StudentController::class , 'index']);

