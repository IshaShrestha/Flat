<?php

Route::get('/', 'DashboardController@index')->name('dashboard');

Route::group(['prefix'=>'setting'],function(){

    Route::get('/create', 'SettingController@create')->name('setting.create');
    Route::post('/store','SettingController@store')->name('setting.store');

});

Route::group(['prefix'=>'page'],function(){
    Route::get('/index','PageController@index')->name('page.index');
    Route::get('/create', 'PageController@create')->name('page.create');
    Route::post('/store','PageController@store')->name('page.store');
    Route::get('/update/{slug}','PageController@edit')->name('page.edit');
    Route::post('/update/{slug}','PageController@update')->name('page.update');
    Route::delete('/index/{slug}','PageController@destroy')->name('page.delete');
    Route::get('/get-all-pages','PageController@getAllPages')->name('page.all');
});

Route::group(['prefix'=>'template'],function (){
    Route::get('/create','TemplateController@create')->name('template.create');
    Route::post('/store','TemplateController@store')->name('template.store');
});

Route::group(['prefix'=>'newsletter'],function (){
    Route::get('/create','NewsController@create')->name('newsletter.create');
    Route::get('/fetch','NewsController@fetch')->name('newsletter.fetch');

});

Route::group(['prefix'=>'library'],function (){
    Route::get('/','LibraryController@index')->name('library');


});

Route::group(['prefix'=>'category'],function (){
    Route::get('/index','CategoryController@index')->name('category.index');
    Route::get('/create','CategoryController@create')->name('category.create');
    Route::post('/store','CategoryController@store')->name('category.store');
    Route::get('/update/{slug}', 'CategoryController@edit')->name('category.edit');
    Route::post('/update/{slug}','CategoryController@update')->name('category.update');
    Route::delete('/index/{slug}','CategoryController@destroy')->name('category.delete');
});

Route::group(['prefix'=>'post'],function (){
    Route::get('/index','PostController@index')->name('post.index');
    Route::get('/create','PostController@create')->name('post.create');
    Route::post('/store','PostController@store')->name('post.store');
    Route::get('/update/{slug}','PostController@edit')->name('post.edit');
    Route::post('/update/{url_slug}','PostController@update')->name('post.update');
    Route::delete('/index/{url_slug}', 'PostController@destroy')->name('post.delete');




});



Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});






