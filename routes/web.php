<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('portfolio.portfolio');
});

Route::post('sendmsg', 'App\Http\Controllers\MsgController@store')->name('msg.store');

Route::get('msgs', 'App\Http\Controllers\MsgController@index')->name('msg.index');
