<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RandomUserController;
use App\Http\Controllers\AdminController;

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

// this well be route for random user , have not yet regeister
Route::get('/',[RandomUserController::class, "welcome"])->name("welcome");
Route::get('/explore',[RandomUserController::class, "explore"])->name("explore");
Route::get('/category',[RandomUserController::class, "category"])->name("category");





Route::get('/admin-dashboard',[AdminController::class, "dashboard"])->name("dashboard");
