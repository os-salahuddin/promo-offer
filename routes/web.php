<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'API\V1'], function () {
    Route::get('/api/v1/version', 'VersionController@index');
});


Route::get('/', function () {
    return view('welcome');
});
