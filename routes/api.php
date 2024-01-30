<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mild_Lakes_Controller;

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

Route::get('/mild_lakes', [Mild_Lakes_Controller::class, 'get_mild_lake']);
Route::get('/moderate_lakes', [Mild_Lakes_Controller::class, 'get_moderate_lake']);
Route::get('/severe_lakes', [Mild_Lakes_Controller::class, 'get_severe_lake']);