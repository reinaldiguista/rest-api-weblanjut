<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerProduct;
use App\Http\Controllers\ControllerUser;


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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
// CONTROLLER PRODUCT
Route::get('/Product',[ControllerProduct::class, 'index']);
Route::get('/Product/{id}', [ControllerProduct::class, 'show']);
Route::post('/Product/store', [ControllerProduct::class, 'store']);
Route::post('/Product/update/{id}', [ControllerProduct::class, 'update']);
Route::post('/Product/delete/{id}',[ControllerProduct::class, 'delete']);

// CONTROLLER USER
Route::get('/User',[ControllerUser::class, 'index']);
Route::get('/User/{id}', [ControllerUser::class, 'show']);
Route::post('/User/store', [ControllerUser::class, 'store']);
Route::post('/User/update/{id}', [ControllerUser::class, 'update']);
Route::post('/User/delete/{id}',[ControllerUser::class, 'delete']);