<?php

Route::get('/', function () {
    return view('home');
});

Route::get('anuncios', function () {
	return view('announcements');
});