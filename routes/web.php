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

Route::group(['namespace' => 'Main'], function (){
   Route::get('/', 'NewsController@index');
   Route::get('/news/{show}', 'NewsController@show')->name('news');
   Route::get('locale/{locale}', 'LocaleController@changeLocal')->name('locale')->middleware('locale');
});

Route::group(['namespace' => 'Admin', 'as' => 'admin.blog.'], function () {
    Route::get('/admin', 'IndexController@index');
    Route::resource('content', 'ContentController');
    Route::resource('banner', 'BannerController');
    Route::resource('worker', 'WorkerController');
});
