<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\messageController;

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

Route::get('/', 'App\Http\Controllers\messageController@list');

Route::get('/add', 'App\Http\Controllers\messageController@form');

Route::post('/add', 'App\Http\Controllers\messageController@create');

Route::get('delete/{id}', [messageController::class, 'delete']);
Route::get('edit/{id}', [messageController::class, 'showData']);
Route::post('edit/', [messageController::class, 'update']);