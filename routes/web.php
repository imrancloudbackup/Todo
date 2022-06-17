<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\TodoController;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/create_todolist', [TodoController::class, 'AllTask'])->middleware(['auth'])->name('createtodolist');

Route::post('/create/task', [TodoController::class, 'AddTask'])->name('addtask');

Route::get('/task/edit/{id}',[TodoController::class,'TaskEdit']);

Route::post('/task/update/',[TodoController::class,'TaskUpdate'])->name('updatetask');

Route::get('/task/delete/{id}',[TodoController::class,'TaskDelete']);

Route::get('/task/complete/{id}',[TodoController::class,'TaskComplete']);

Route::get('/task/recover/{id}',[TodoController::class,'TaskRecover']);

Route::get('/user/logout', [LogoutController::class, 'Logout'])->name('user.logout');

require __DIR__.'/auth.php';    
