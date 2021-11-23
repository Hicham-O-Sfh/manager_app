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

Auth::routes();

Route::get('/Dashboard', 'HomeController@index')->name('accueil_client');
Route::get('/Dashboard-Admin', 'HomeController@admin_home')->name('accueil_admin')->middleware('is_admin');
Route::get('/', 'AccueilController@accueil')->name("accueil");
