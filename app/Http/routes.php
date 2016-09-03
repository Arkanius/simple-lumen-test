<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});


Route::group(['prefix' => 'v1'], function () {
    Route::get('users', 'UserController@index');

    Route::resource('authenticate', 'AuthController', ['only' => ['index']]);
    Route::post('authenticate', 'AuthController@authenticate');


});
