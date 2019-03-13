<?php

################################################################################
#   Web Routes
################################################################################

Route::view('/', 'welcome');
Route::get('/books', 'BookController@index');
Route::get('/books/{title}', 'BookController@show');

Route::get("/example", function(){
    return view('abc');
});
