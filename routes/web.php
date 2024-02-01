<?php

use App\Http\Controllers\Mild_Lakes_Controller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('lakes');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/mild_lakes', [Mild_Lakes_Controller::class, 'get_mild_lake']);
Route::get('/moderate_lakes', [Mild_Lakes_Controller::class, 'get_moderate_lake']);
Route::get('/severe_lakes', [Mild_Lakes_Controller::class, 'get_severe_lake']);

Route::get('/lake_2015/{filename}', [Mild_Lakes_Controller::class, 'compare_2015_path'])->name('lake.image');
Route::get('/lake_2016/{filename}', [Mild_Lakes_Controller::class, 'compare_2016_path'])->name('lake2016.image');