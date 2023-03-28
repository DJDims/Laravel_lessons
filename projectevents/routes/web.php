<?php

use App\Http\Controllers\EventController;
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
    return view('dashboard');
});

Route::get('/eventlist', [EventController::class, 'index']);
Route::get('/addevent', [EventController::class, 'create']);
Route::post('/addevent', [EventController::class, 'store']);
Route::get('/editevent/{event}', [EventController::class, 'edit']);
Route::post('/editevent/{event}', [EventController::class, 'update']);