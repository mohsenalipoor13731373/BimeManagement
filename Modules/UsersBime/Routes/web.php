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

Route::prefix('usersbime')->group(function () {
    Route::get('/users-bime/wizard/{id?}', 'UsersBimeController@wizard')->name('admin.module.usersbime.wizard');
    Route::post('/users-bime/store/{id?}', 'UsersBimeController@store')->name('admin.module.usersbime.store');
    Route::get('/users-bime/maketable', 'UsersBimeController@index')->name('admin.module.usersbime.maketable');
    Route::get('/users-bime/delete/{id?}', 'UsersBimeController@delete')->name('admin.module.usersbime.delete');
});
