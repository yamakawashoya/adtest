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

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/contacts/create', 'ContactController@create')->name('contacts.create');
    Route::post('/contacts/confirm', 'ContactController@confirm')->name('contacts.confirm');
    Route::post('/contacts/store', 'ContactController@store')->name('contacts.store');
});

Route::get('/thanks', function () {
    return view('thanks');
});