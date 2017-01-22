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

Route::get('/', function () {

    return view('frontend.blog.index');
});
Route::get('/ql', function () {

});
Route::get('/article', function () {

    return view('frontend.blog.article');
});


Route::group([
    'namespace' => 'Backend',
], function () {
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