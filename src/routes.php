<?php

Route::group(['prefix' => 'hideyatsu'], function () {
    Route::get('/', function () {
        echo 'Hello World!';
    });
    Route::get('test', function() {
        echo 'Hello from the test package!';
    });
    Route::get('upper/{str}', 'Hideyatsu\Test\TestController@upper');
    Route::get('lower/{str}', 'Hideyatsu\Test\TestController@lower');
});
