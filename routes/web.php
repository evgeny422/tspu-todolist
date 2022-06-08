<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::resource('users', App\Http\Controllers\UserController::class);
Route::resource('project', App\Http\Controllers\ProjectController::class);

Route::group(['prefix' => 'project/{project_id}'], function () {
    Route::resource('label', App\Http\Controllers\LabelController::class);
    Route::resource('task', App\Http\Controllers\TaskController::class);

    Route::post('task/done/{task}', [App\Http\Controllers\TaskController::class, 'done'])->name('task.done');
});

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

