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


});



Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});






