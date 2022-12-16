<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {

//     return view('room.list');
// });

// 一覧表示
Route::get('/', [RoomController::class, 'room'])->name('room');
// 登録画面表示
Route::get('/room/create', [RoomController::class, 'create'])->name('create');
// 登録
Route::post('/room/store', [RoomController::class, 'store'])->name('store');
// 詳細表示
Route::get('/room/{id}', [RoomController::class, 'detail'])->name('detail');
// 編集表示
Route::get('/edit/{id}', [RoomController::class, 'edit'])->name('edit');
Route::post('/room/update', [RoomController::class, 'update'])->name('update');
// 削除
Route::post('/room/delete/{id}', [RoomController::class, 'delete'])->name('delete');