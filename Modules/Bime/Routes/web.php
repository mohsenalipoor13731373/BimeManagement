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

Route::prefix('bime')->group(function () {
    Route::get('/bime/wizard/{id?}', 'BimeController@wizard')->name('admin.module.bime.wizard');
    Route::get('/bime/delete/{id?}', 'BimeController@delete')->name('admin.module.bime.delete');
    Route::post('/bime/store/{id?}', 'BimeController@store')->name('admin.module.bime.store');
    Route::get('/bime/maketable', 'BimeController@index')->name('admin.module.bime.maketable');


});
