<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
 Route::post('pending',[App\Http\Controllers\TaskController::class,'pending'])->name('tasks.pending');
 Route::post('complete',[App\Http\Controllers\TaskController::class,'complete'])->name('tasks.complete');
Route::resource('tasks', App\Http\Controllers\TaskController::class);
Route::resource('usertasks', App\Http\Controllers\UsertaskController::class);
Route::resource('user-tasks', App\Http\Controllers\UserTaskController::class);
Route::resource('users', App\Http\Controllers\UserController::class);