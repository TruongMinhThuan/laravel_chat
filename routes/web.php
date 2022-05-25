<?php

use App\Events\ChatMessageCreated;
use App\Models\ChatMessage;
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
    $a = ChatMessage::create([
        'chat_id' => 1,
        'user_id' => 1,
        'text' => "Hello world",
    ]);


    return view('welcome');
});
