<?php
use App\Http\Controllers\UtilityController;
use App\Http\Controllers\GameController;

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/helloworld', fn() => view('helloworld'));
Route::get('/hello', fn() => view('hello', [
    'name' => '山田',
    'course' => 'Laravel'
]));

Route::get('/', fn() => view('index'));
Route::get('/curriculum', fn() => view('curriculum'));

// 世界の時間
Route::get('/world-time', [UtilityController::class, 'worldTime'] );

// おみくじ
Route::get('/omikuji',  [GameController::class, 'omikuji'] );

// モンティ・ホール問題
Route::get('/monty-hall',  [GameController::class, 'montyHall']);
