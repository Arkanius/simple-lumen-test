<?php

$app->get('/', function () use ($app) {
    return $app->version();
});


$app->group(['prefix' => 'v1'], function () use ($app) {
    $app->get('users', 'App\Http\Controllers\UserController@index');

    //Route::resource('authenticate', 'AuthController', ['only' => ['index']]);
    //Route::post('authenticate', 'AuthController@authenticate');

});
