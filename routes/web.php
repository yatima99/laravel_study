<?php
use App\Http\Controllers\UtilityController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\RequestSampleController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HiLowController;

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
Route::get('/query-strings', [RequestSampleController::class, 'queryStrings']);
Route::get('/form', [RequestSampleController::class, 'form']);
Route::get('/users/{id}', [RequestSampleController::class, 'profile'])->name('profile');
Route::get('/products/{category}/{year}', [RequestSampleController::class, 'productsArchive']);
Route::get('/route-link', [RequestSampleController::class, 'routeLink']);

Route::get('/login', [RequestSampleController::class, 'loginForm']);
Route::post('/login', [RequestSampleController::class, 'login'])->name('login');

Route::resource('/events', EventController::class)->only(['create', 'store']);
// ハイローゲーム
Route::get('/hi-low', [HiLowController::class, 'index'])->name('hi-low');
Route::post('/hi-low', [HiLowController::class, 'result']);
