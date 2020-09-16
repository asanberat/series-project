<?php
use Illuminate\Support\Facades\Auth;
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

Route::get('/','App\Http\Controllers\AuthController@login')->name('login');
Route::post('loginPost','App\Http\Controllers\AuthController@loginPost')->name('loginPost');


Route::get('/home','App\Http\Controllers\HomeControllers@index')->name('welcome');

Route::get('getInsert','App\Http\Controllers\InsertController@index')->name('getInsert');
Route::post('serieInsert','App\Http\Controllers\InsertController@serieInsert')->name('serieInsert');

Route::get('/actiontable','App\Http\Controllers\ActionController@index')->name('actionseries');
Route::get('/comedytable','App\Http\Controllers\ComedyController@index')->name('comedyseries');
Route::get('/dramatable','App\Http\Controllers\DramaController@index')->name('dramaseries');
Route::get('/scifitable','App\Http\Controllers\ScifiController@index')->name('scifiseries');

Route::get('actiondetail','App\Http\Controllers\ActionController@detail')->name('actiondetail');
Route::get('comedydetail','App\Http\Controllers\ComedyController@detail')->name('comedydetail');
Route::get('/dramadetail','App\Http\Controllers\DramaController@detail')->name('dramadetail');
Route::get('/scifidetail','App\Http\Controllers\ScifiController@detail')->name('scifidetail');


Route::get('comedydelete/{id}','App\Http\Controllers\ComedyController@delete')->name('comedyDelete');
Route::get('actionsdelete/{id}','App\Http\Controllers\ActionController@delete')->name('actionDelete');
Route::get('dramadelete/{id}','App\Http\Controllers\DramaController@delete')->name('dramaDelete');
Route::get('scifidelete/{id}','App\Http\Controllers\ScifiController@delete')->name('scifiDelete');


