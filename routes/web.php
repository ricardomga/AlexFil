<?php
Route::get('/', 'HomeController@index')->name('home');
Route::get('/sobre-nos', 'AboutController@index');
Route::get('/contactos', 'ContactsController@index');
Route::get('/galeria', 'GalleryController@index');

Route::get('/servicos', 'ServicesController@index');
Route::get('/servicos/{service}', 'ServicesController@show');

Route::get('/marcacoes/pedir', 'AppointmentsController@request');
Route::post('/marcacoes', 'AppointmentsController@store');

Route::get('/orcamentos/pedir', 'BudgetController@request');
Route::post('/orcamentos', 'BudgetController@store');