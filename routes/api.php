<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::prefix('users')->group(function () {
    Route::get('index','UsersController@index')->name('users.index');
    Route::post('create','UsersController@create')->name('users.create');
    Route::put('update/{id}','UsersController@update')->name('users.update');
    Route::delete('delete/{id}','UsersController@destroy')->name('users.delete');
});


Route::prefix('address')->group(function () {
    Route::get('index','AddressController@index')->name('address.index');
    Route::post('create','AddressController@create')->name('address.create');
    Route::put('update/{id}','AddressController@update')->name('address.update');
    Route::delete('delete/{id}','AddressController@destroy')->name('address.delete');
});


