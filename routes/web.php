<?php

use App\Events\Message;
use App\Http\Controllers\ChatController;
use Illuminate\Http\Request;
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
    // return view('welcome');
    // return view('frontend.layouts.app');
    return view('frontend.index');
});

Route::get('/general-chat',[ChatController::class, 'generalChat'])->name('general.chat');

Route::post('/send-message', function (Request $request){
    event(new Message($request->input('username'), $request->input('message')));
    // return ["success" => true];
    return [$request->input('username'), $request->input('message')];
});
