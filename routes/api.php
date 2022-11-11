<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\StudentController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/Animals', [AnimalController::class, 'index']);

Route::post('/Animals', [AnimalController::class, 'store']);

Route::put('/Animals/{id}', [AnimalController::class, 'update']);

Route::delete('/Animals/{id}', [AnimalController::class, 'destroy']);

Route::get('/Students', [StudentController::class, 'index']);

Route::post('/Students', [StudentController::class, 'store']);

Route::put('/Students/{id}', [StudentController::class, 'update']);

Route::delete('/Students/{id}', [StudentController::class, 'destroy']);

//mendapatkan detail resource student
Route::get('Students/{id}', [StudentController::class, 'show']);

//memperbarui resource student
//Route::put('Students/{id}', [StudentController::class, 'updat']);