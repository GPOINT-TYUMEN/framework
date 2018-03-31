<?php

Route::get('/404', 'index@error');
//>Страницы сайта
Route::get('/', 'index@home');
//<Страницы сайта

Route::post('/mail', 'mail@mail');



