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
    Route::get('view', 'Notes\NotesController@view')->name('notes.view');
    Route::get('new', 'Notes\NotesController@new')->name('notes.new');
    Route::get('edit', 'Notes\NotesController@edit')->name('notes.edit');
});
