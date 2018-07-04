<?php

Route::get('/', function () {
    return view('home');
});

Route::get('anuncios', function () {
	return view('announcements');
});

Route::get('anuncio/{id}', function () {
	return view('announcement');
});

Route::get('empresa/{id}', function () {
    return view('company');
});

