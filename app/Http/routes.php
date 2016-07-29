<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|


Route::get('/', function () {
    return view('welcome');
});
*/
Route::group(['middleware' => 'guest'], function() {
    Route::get('/', ['uses' => 'HomeController@index', 'as' => 'Home']);
    Route::get('/bigbold', ['uses' => 'HomeController@bigBold', 'as' => 'BigBold']);
    Route::post('article/create', ['uses' => 'HomeController@create', 'as' => 'article.create']);
    Route::post('article', ['uses' => 'HomeController@store', 'as' => 'article.store']);
    Route::get('article/{id}', ['uses' => 'HomeController@show', 'as' => 'article.show'])->where(['id' => '[0-9]+']);
    Route::get('article/{id}/edit', ['uses' => 'HomeController@edit', 'as' => 'article.edit'])->where(['id' => '[0-9]+']);
    Route::post('article/{id}', ['uses' => 'HomeController@update', 'as' => 'article.update'])->where(['id' => '[0-9]+']);
    Route::get('article/{id}/delete', ['uses' => 'HomeController@destroy', 'as' => 'article.delete'])->where(['id' => '[0-9]+']);

// Authentication routes...
    Route::get('auth/login', 'HomeController@getLogin');
    Route::post('auth/login', ['uses' => 'HomeController@login', 'as' => 'auth.login']);
    Route::get('auth/logout', ['uses' => 'Auth\AuthController@getLogout', 'as' => 'auth.logout']);

// Registration routes...
    Route::get('auth/register', 'HomeController@getRegister');
    Route::post('auth/register', ['uses' => 'Auth\AuthController@postRegister', 'as' => 'auth.reg']);
});

Route::group(['middleware' => 'auth' ], function()
{
    Route::get('main', ['uses' => 'LoggedController@index', 'as' => 'Home']);
    Route::group(['prefix' => 'main'], function (){
        Route::post('article/create', ['uses' => 'LoggedController@create', 'as' => 'larticle.create']);
        Route::post('article', ['uses' => 'LoggedController@store', 'as' => 'larticle.store']);
        Route::get('article/{id}', ['uses' => 'LoggedController@show', 'as' => 'larticle.show'])->where(['id' => '[0-9]+']);
        Route::get('article/{id}/edit', ['uses' => 'LoggedController@edit', 'as' => 'larticle.edit'])->where(['id' => '[0-9]+']);
        Route::post('article/{id}', ['uses' => 'LoggedController@update', 'as' => 'larticle.update'])->where(['id' => '[0-9]+']);
        Route::get('article/{id}/delete', ['uses' => 'LoggedController@destroy', 'as' => 'larticle.delete'])->where(['id' => '[0-9]+']);

        Route::get('logout', ['uses' => 'LoggedController@logout', 'as' => 'logout']);
    });

});
