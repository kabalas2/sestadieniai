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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/projects', 'App\Http\Controllers\ProjectController');
Route::resource('/students', 'App\Http\Controllers\StudentController');
Route::get('/group/{id}', [App\Http\Controllers\GroupController::class, 'show'])->name('group.show');
Route::get('/group/assign/{id}', [App\Http\Controllers\GroupController::class, 'assign'])->name('group.assign');





