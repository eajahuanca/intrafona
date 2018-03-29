<?php

Route::get('/', function () {
    return redirect('init');
});
Route::resource('init','IntranetController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/acceso', 'AccesoController');
Route::resource('/banner', 'BannerController');
Route::resource('/comunicado', 'ComunicadoController');
Route::resource('/contacto', 'ContactoController');
Route::resource('/documento', 'DocumentoController');
