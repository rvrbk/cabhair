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
    return view('spa');
});

Route::get('activateaccount/{token}', 'AccountController@activate');
Route::get('activatehelp/{token}', 'HelpController@activate');
Route::get('edithelp/{token}', 'HelpController@edit');
Route::post('edithelp/{token}', 'HelpController@alter');
Route::get('deletehelp/{token}', 'HelpController@delete');
Route::get('match/{token}', 'OfferController@match');
