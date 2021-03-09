<?php

Route::get('/', 'WelcomeController@index')->name('welcome');

Route::get('/blog','BlogController@index')->name('blog');

Route::get('/blog/{url_slug}','BlogController@readPost')->name('blog.view');


