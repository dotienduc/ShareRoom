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
Route::get('/', 'HomeController@index')->name('home');
Route::get('/rent/{id?}', 'RoomController@rent')->name('ownerRent')->middleware('auth');
Route::get('/room-detail/{id}', 'RoomController@roomDetail')->name('room-detail');

Route::get('/load-room', 'RoomController@loadData')->name('load-room');
Route::get('/load-city', 'CollectController@loadCity')->name('load-city');
Route::get('/load-category', 'CollectController@loadCategory');

Route::get('/loginUser', 'Auth\LoginController@showLoginForm')->name('loginPage');
Route::post('/loginUser', 'Auth\LoginController@login')->name('loginPage');
Route::get('/logoutUser', 'Auth\LoginController@logout')->name('logoutPage');
Route::get('/signupUser', 'Auth\RegisterController@showRegistrationForm')->name('showSignup');
Route::post('/users/resgister', 'Auth\RegisterController@register')->name('resgisterUser');

Route::post('/comment', 'CommentController@comment')->name('comment');
Route::post('/load-comment', 'CommentController@loadComment')->name('loadComment');

Route::get('/hienthiRoom', 'RoomController@hienthiRoom')->name('hienthiRoom');
Route::post('/createRoom', 'RoomController@storeRoom')->name('storeRoom');
Route::get('/delete-room/{id}', 'RoomController@destroy')->name('destroyRoom');
Route::get('/show-room/{id}', 'RoomController@show')->name('showRoom');
Route::post('/update-room', 'RoomController@update')->name('updateRoom');

Route::get('/favorite', 'RoomController@favorite')->name('favorite')->middleware('auth');;
Route::get('/save-room/{id}', 'RoomController@save')->name('saveRoom')->middleware('auth');;
Route::get('/delete-room-favorite/{id}', 'RoomController@delete')->name('deleteRoom')->middleware('auth');

Route::post('/custom-image', 'ImageController@custom')->name('customeImage');

Auth::routes(['login' => false]);

