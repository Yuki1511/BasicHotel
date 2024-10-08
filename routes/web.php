<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomtypeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\ReserveController;
use App\Http\Controllers\DetailController;

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
    return view('welcome');
});

// /roomtypeにアクセスされたらRoomtypeControllerのindexメソッドを呼び出せ
Route::get('/roomtype', [RoomtypeController::class, 'index']);

Route::get('/room', [RoomController::class, 'index']);

Route::get('/guest', [GuestController::class, 'index']);

Route::get('/reserve', [ReserveController::class, 'index']);

Route::get('/detail', [DetailController::class, 'index']);