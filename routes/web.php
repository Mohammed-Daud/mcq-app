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
})->name('home');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/start', [App\Http\Controllers\HomeController::class, 'start'])->name('start')->middleware('guest');
Route::post('/user/create', [App\Http\Controllers\HomeController::class, 'createUser'])->name('user.create');

Route::get('/mcq', [App\Http\Controllers\McqController::class, 'index'])->name('mcq.index');
Route::get('/load-question/{question_no}', [App\Http\Controllers\McqController::class, 'getQuestion'])->name('mcq.loadQuestion');
Route::post('/mark-skip', [App\Http\Controllers\McqController::class, 'markSkip'])->name('mcq.markSkip');
Route::post('/save-answer', [App\Http\Controllers\McqController::class, 'saveAnswer'])->name('mcq.saveAnswer');
Route::get('/show-result', [App\Http\Controllers\McqController::class, 'showResult'])->name('mcq.showResult');


