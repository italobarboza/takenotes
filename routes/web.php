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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::prefix('notes')->group(function () {
    Route::get('show/{id}', 'Notes\NotesController@show')->name('notes.show');
    Route::get('new', 'Notes\NotesController@new')->name('notes.new');
    Route::get('edit/{id}', 'Notes\NotesController@edit')->name('notes.edit');
    Route::get('share/{url}', 'Notes\NotesController@share')->name('notes.share');
    Route::get('delete/{id}', 'Notes\NotesController@delete')->name('notes.delete');

    Route::post('save/{id?}', 'Notes\NotesController@save')->name('notes.save');
    Route::post('update/{id}', 'Notes\NotesController@update')->name('notes.update');
    Route::delete('destroy/{id}', 'Notes\NotesController@destroy')->name('notes.destroy');
});

Route::prefix('account')->group(function () {
    Route::get('verify/{email}/{verifyToken}', 'Auth\RegisterController@accountVerifyEmail')->name('accountVerifyEmail');
    Route::get('profile', 'AccountController@profile')->name('account.profile');
    Route::post('profile', 'AccountController@saveProfile')->name('account.saveprofile');
});

Route::prefix('login')->group(function () {
    Route::get('facebook', 'Auth\LoginController@redirectToProviderFacebook')->name('login.facebook');
    Route::get('facebook/callback', 'Auth\LoginController@handleProviderCallbackFacebook')->name('login.facebook.callback');
    Route::get('twitter', 'Auth\LoginController@redirectToProviderTwitter')->name('login.twitter');
    Route::get('twitter/callback', 'Auth\LoginController@handleProviderCallbackTwitter')->name('login.twitter.callback');
    Route::get('google', 'Auth\LoginController@redirectToProviderGoogle')->name('login.google');
    Route::get('google/callback', 'Auth\LoginController@handleProviderCallbackGoogle')->name('login.google.callback');
});