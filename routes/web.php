<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StubbyController;

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

Route::resource('stubbies', StubbyController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/stubbies', function () {
    return view('stubby.index', ['stubbies'=>\App\Models\Stubby::all()]);
})->name('home');

Route::resource('bookmarks',\App\Http\Controllers\BookmarkController::class);
Route::resource('teams', \Laravel\Jetstream\Http\Controllers\Livewire\TeamController::class);

