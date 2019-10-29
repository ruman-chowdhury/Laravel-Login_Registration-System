<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'AdminController@readIndex')->name('index');
Route::get('/homeContent', 'AdminController@readHome')->name('home.content');


Route::get('/form/show','AdminController@formShow')->name('form.show');
Route::post('/form/data','AdminController@formData')->name('form.data');

Route::get('/edit/data/{id}','AdminController@edit')->name('edit.data');
Route::post('/update/data/{id}','AdminController@update')->name('update.data');

Route::get('/delete/data/{id}','AdminController@delete')->name('delete.data');

Route::get('/view/data/{id}','AdminController@view')->name('view.data');


//authenticates route
Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');
