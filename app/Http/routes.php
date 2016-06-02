<?php
Route::get('/',function () {
	return 'none';
});
Route::get('about','PagesController@about');
Route::get('contact','PagesController@contact');

Route::resource('articles','ArticlesController');
