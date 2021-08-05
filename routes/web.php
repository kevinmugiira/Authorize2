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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('conversations', [\App\Http\Controllers\ConversationController::class,'index']);
Route::get('conversation/{id}', [\App\Http\Controllers\ConversationController::class,'show'])->middleware('can:view,id');
Route::post('conversation/{id}', [\App\Http\Controllers\ReplyController::class,'store']);

Route::post('best-reply/{reply}', [\App\Http\Controllers\BestReplyController::class,'store']);


Route::get('/reports', function () {
    return 'The secret reports';
})->middleware('can:view_reports');
