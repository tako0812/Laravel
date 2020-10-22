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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// TOPページ（商品一覧画面）
Route::get('product/', 'ProductController@index')->name('product.index');
// 商品新規作成画面
Route::get('product/create', 'ProductController@create')->name('product.create');
// 商品編集画面
Route::get('product/edit/{id}', 'ProductController@edit')->name('product.edit');
// 商品詳細画面
Route::get('product/{id}', 'ProductController@show')->name('product.detail');
// 商品登録処理
Route::post('product/store', 'ProductController@store')->name('product.store');
// 商品更新処理
Route::post('product/update/{id}', 'ProductController@update')->name('product.update');
// 商品削除処理
Route::post('product/delete', 'ProductController@delete')->name('product.delete');


//マイページ(固定)
Route::get('/mypage', 'UserController@user_mypage')->name('user.mypage');
//ユーザー情報編集画面
Route::get('user/config', 'UserController@user_config')->name('user.config');
//ユーザーの投稿した商品の管理
Route::get('user_post/', 'UserController@user_post')->name('user.post');
//ユーザーの購入した商品の履歴
Route::get('user_buy/', 'UserController@user_buy')->name('user.buy');
// ユーザー情報更新
Route::post('user/update', 'UserController@user_update')->name('user.update');

//ユーザー一覧画面
Route::get('/user', 'UserController@user')->name('user');


//メッセージ機能
Route::get('/timeline/{id}', 'TimelineController@showTimelinePage')->name('tweet.get'); 

Route::post('/timeline/{id}', 'TimelineController@postTweet')->name('tweet.post');

//メッセージ一覧
Route::get('/timelineLIST', 'TimelineController@showTimelineList')->name('tweetLIST'); 




//sample(vue.jsのテスト用)
Route::get('/sample', function () {
    return view('sample');
});