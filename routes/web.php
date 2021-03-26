<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pusher', function () {
//    dd(formatDate(now()));
//    $options = array(
//        'cluster' => 'ap1',
//        'useTLS' => true
//    );
//    $pusher = new Pusher\Pusher(
//        'f209d321f560d24c53b5',
//        '3f4876ca2c46177dc51f',
//        '1178250',
//        $options
//    );
//
//    $data['message'] = 'hello world';
//    $pusher->trigger('my-channel', 'my-event', $data);
    $data['message'] = 'hello world';
    pushSocket('my-channel', 'my-event', $data);
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
