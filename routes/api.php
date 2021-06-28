<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('bookmarks', [\App\Http\Controllers\Api\BookmarkController::class, 'index']);

Route::get('bookmarks/{bookmark}', '\App\Http\Controllers\Api\BookmarkController@show');
Route::post('bookmarks', '\App\Http\Controllers\Api\BookmarkController@store');
Route::post('bookmarks/{bookmark}', '\App\Http\Controllers\Api\BookmarkController@update');
Route::delete('bookmarks/{bookmark}', '\App\Http\Controllers\Api\BookmarkController@destroy');
