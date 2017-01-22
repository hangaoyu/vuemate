<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group([
    'namespace' => 'Frontend',
], function () {

    Route::get('/', [
        'as' => 'index',
        'uses' => 'BlogController@index',
    ]);
    Route::get('/post/{id}', 'BlogController@show')->name('post.show');



});


Route::group([
    'namespace' => 'Backend',
], function () {
    Route::post('/blog/picture/upload', 'ArticleController@imagesStore');
    Route::get('/create', [
        'as' => 'create',
        'uses' => 'ArticleController@create',
    ]);
    Route::post('/post', 'ArticleController@store');











    Route::get('crawl', [
        'as' => 'crawl',
        'uses' => 'CrawlController@crawl',
    ]);
    Route::get('redis', [
        'as' => 'redis',
        'uses' => 'CrawlController@redis',
    ]);
    Route::get('collection', [
        'as' => 'redis',
        'uses' => 'CrawlController@collection',
    ]);
    Route::get('db', [
        'as' => 'redis',
        'uses' => 'CrawlController@db',
    ]);
    Route::get('markdown', [
        'as' => 'markdown',
        'uses' => 'CrawlController@markdown',
    ]);
});