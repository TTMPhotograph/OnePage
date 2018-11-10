<?php
use App\Novels;
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
/*トップページ表示*/
Route::get('/', 'TopController@index');
/*新規投稿*/
Route::get('/writing','WritingController@index');
Route::post('/writing','WritingController@doWriting');
/*本の編集*/
Route::post('edit/{id}','WritingController@doEdit');
/*本の削除*/
Route::delete('/delete/{novel}','WritingController@doDel');

// ログアウト処理のルーティング
Route::get('/logout', array('uses' => 'BookshelfController@doLogout'));
Auth::routes();
// 本棚表示
 Route::get('/bookshelf', 'BookshelfController@index')->name('bookshelf');
/*ユーザーの更新機能*/
Route::post('/bookshelf','BookshelfController@userUpdate');
 // Route::get('/home', 'HomeController@index')->name('home');
// Twitterログイン
Route::get('auth/twitter', 'Auth\AuthController@redirectToProvider');
Route::get('auth/twitter/callback', 'Auth\AuthController@handleProviderCallback');

