<?php

Route::get('/','TasksController@index');
Route::post('/task', 'TaskController@create');
Route::get('/task/{task}', 'TaskController@delete');


