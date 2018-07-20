<?php

Route::get('/', function () {
    return view('home');
});

Route::get('registrar', function () {
	return view('registro');
});

Route::get('anuncios', function () {
	return view('announcements');
});

Route::get('anuncio/{id}', function () {
	return view('announcement');
});

Route::post('ruta-post', 'TestController@test');

Route::get('empresa/{id}', function () {
    return view('company');
});

Route::get('callback', 'TestController@callback');

