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

