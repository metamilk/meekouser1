<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('user', function (Request $request) {
    return $request->user();
});

    Route::get('meekouser1s', 'Meekouser1Controller@index');
    Route::group(['prefix' => 'meekouser1'], function () {
    Route::post('add', 'Meekouser1Controller@add');
    Route::get('edit/{id}', 'Meekouser1Controller@edit');
    Route::post('update/{id}', 'Meekouser1Controller@update');
    Route::delete('delete/{id}', 'Meekouser1Controller@delete');
});
