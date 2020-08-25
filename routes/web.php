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


/*
|--------------------------------------------------------------------------
| Clean Blog routes
|--------------------------------------------------------------------------
*/

Route::group(['namespace' => 'CleanCodeControllers'], function () {
    Route::get('/', 'PostController@getIndex')->name('home');
    Route::get('/about', 'CleanCodeController@getAbout')->name('about');
    Route::get('/post/{id}', 'PostController@getSamplePost')->name('samplePost');
    Route::get('/contact', 'CleanCodeController@getContact')->name('contact');
    Route::get('/new', 'PostController@getNewPost')->name('newPost');
    Route::post('/store', 'PostController@store')->name('store');
});

Route::group(['namespace' => 'HandleMails'], function () {
    Route::post('contact', 'HandleMail@postContact')->name('postContact');
});


