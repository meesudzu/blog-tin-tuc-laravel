<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Article;

Route::get('/', 'UserController@showHome');

Route::get('login', 'UserController@showLogin')->middleware('profiles');
Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');
Route::get('logout', 'UserController@logout');
Route::get('profiles', 'UserController@showProfiles')->middleware('login');
Route::post('updateProfiles', 'UserController@updateProfiles');
Route::post('updateAvatar', 'UserController@updateAvatar');
Route::get('updateAvatar', 'UserController@updateAvatar');
Route::get('article/{slug}', 'UserController@showArticle');
Route::get('articles', 'UserController@showAllArticles');
Route::get('category/{slug}', 'UserController@showCategory');
Route::get('search', 'UserController@showSearch');
Route::post('comment', 'UserController@comment');

Route::get('404', function () {
    return view('errors.404');
});

Route::get('contact', function () {
    return view('contact');
});

/**
 * Route admin
 */

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {

    Route::get('/', 'AdminController@dashboard');

    Route::group(['prefix' => 'member'], function () {
        Route::get('/', 'MemberController@showList');
        Route::get('block/{id}', 'MemberController@block');
        Route::get('mod/{id}', 'MemberController@mod');
    });

    Route::group(['prefix' => 'ad'], function () {
        Route::get('/', 'AdController@showList');
        Route::get('add', 'AdController@showAdd');
        Route::post('add', 'AdController@add');
        Route::get('edit/{id}', 'AdController@showEdit');
        Route::post('edit/{id}', 'AdController@edit');
        Route::get('delete/{id}', 'AdController@delete');
    });

    Route::group(['prefix' => 'category'], function () {
        Route::get('/', 'CategoryController@showList');
        Route::get('add', 'CategoryController@showAdd');
        Route::post('add', 'CategoryController@add');
        Route::get('edit/{id}', 'CategoryController@showEdit');
        Route::post('edit/{id}', 'CategoryController@edit');
        Route::get('delete/{id}', 'CategoryController@delete');
    });

    Route::group(['prefix' => 'comment'], function () {
        Route::get('/', 'CommentController@showList');
        Route::get('delete/{id}', 'CommentController@delete');
    });

    Route::group(['prefix' => 'article'], function () {
        Route::get('/', 'ArticleController@showList');
        Route::get('auto-rss', 'ArticleController@autoRSS');
        Route::get('rss-vnexpress', 'ArticleController@rssVNExpress');
        Route::get('add', 'ArticleController@showAdd');
        Route::post('add', 'ArticleController@add');
        Route::get('edit/{id}', 'ArticleController@showEdit');
        Route::post('edit/{id}', 'ArticleController@edit');
        Route::get('delete/{id}', 'ArticleController@delete');
    });

    Route::group(['prefix' => 'slide'], function () {
        Route::get('/', 'SlideController@showList');
        Route::get('add', 'SlideController@showAdd');
        Route::post('add', 'SlideController@add');
        Route::get('edit/{id}', 'SlideController@showEdit');
        Route::post('edit/{id}', 'SlideController@edit');
        Route::get('delete/{id}', 'SlideController@delete');
    });
});
