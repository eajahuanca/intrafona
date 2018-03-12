<?php

Route::get('/', function () {
    return redirect('init');
});
Route::resource('init','IntranetController');


Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
