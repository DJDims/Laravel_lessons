<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
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
Route::delete('/eventlist/{event}', [EventController::class, 'destroy']);

Route::get('/users', [UserController::class, 'index']);
Route::post('/usersByRole', [UserController::class, 'usersByRole']);
Route::get('/adduser', [UserController::class, 'create']);
Route::post('/adduser', [UserController::class, 'store']);
Route::get('/edituser/{user}', [UserController::class, 'edit']);
Route::post('/edituser/{user}', [UserController::class, 'update']);
Route::delete('/users/{user}', [UserController::class, 'destroy']);