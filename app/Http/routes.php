<?php

Route::get('/','TaskController@index');
Route::post('/task', 'TaskController@create');
Route::delete('/task/{task}', 'TaskController@delete');



