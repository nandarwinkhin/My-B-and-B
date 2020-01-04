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

Route::get('/{col}', 'FrontdeskController@index');
Route::get('/', 'FrontdeskController@index');

Route::get('create/rooms', 'RoomOperation@room');
Route::post('create/rooms', 'RoomOperation@storeRoom');

Route::get('create/roomtype',function (){
    return view('room_operation.type');
});
Route::post('create/roomtype', 'RoomOperation@storeRoomType');

Route::get('/test', function () {
    return view('test');
});

Route::get("/daily/guests/{id}", "FrontdeskController@showTab");

Route::get('/checkin/guest', function () {
    return view('guest.guestInfo');
});

Route::get('ajax', function () {
    return view('testAjax.index');
});
Route::post('/getmsg', 'AjaxController@index');
Route::post('/storeresearch', 'AjaxController@store');


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/auth', function () {
    return view('layouts.app');
});
Route::post('/increase', function () {
    echo "i am working";
});
