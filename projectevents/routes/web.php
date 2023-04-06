<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
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
    return view('start');
});

Route::get('/dashboard', [Controller::class, 'dashboard'])->name('dashboard');


// ---------- Login ACTIONS ----------
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/logout', [AuthController::class, 'logout'])->name('login');
Route::get('/register', [AuthController::class, 'register']);
// ---------- Login ACTIONS ----------

// ---------- Events CRUD ----------
Route::get('/eventlist', [EventController::class, 'index']);
Route::get('/addevent', [EventController::class, 'create']);
Route::post('/addevent', [EventController::class, 'store']);
Route::get('/editevent/{event}', [EventController::class, 'edit']);
Route::post('/editevent/{event}', [EventController::class, 'update']);
Route::delete('/eventlist/{event}', [EventController::class, 'destroy']);
// ---------- Events CRUD ----------

// ---------- Users CRUD ----------
Route::get('/users', [UserController::class, 'index']);
Route::post('/usersByRole', [UserController::class, 'usersByRole']);
Route::get('/adduser', [UserController::class, 'create']);
Route::post('/adduser', [UserController::class, 'store']);
Route::get('/edituser/{user}', [UserController::class, 'edit']);
Route::post('/edituser/{user}', [UserController::class, 'update']);
Route::delete('/users/{user}', [UserController::class, 'destroy']);
// ---------- Users CRUD ----------