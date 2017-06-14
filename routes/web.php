<?php

Route::name('posts_path')->get('/publi','PubliController@index');
/*crear formularios*/
Route::name('formulario')->get('/publi/crear', 'PubliController@create');
Route::name('formulario_store')->post('/publi', 'PubliController@store');

Route::name('post_path')->get('/publi/{puId}','PubliController@show');



/* del vid 5
Route::name('posts_path')->get('/publi','PubliController@index');
Route::name('post_path')->get('/publi/{puId}','PubliController@show');

/*crear formularios*
Route::name('formulario')->get('/publi/crear', 'PubliController@create');*/