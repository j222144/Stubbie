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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return redirect(route('stubbies.index'));
})->name('dashboard');

Route::resource('bookmarks',\App\Http\Controllers\BookmarkController::class);
Route::resource('teams', \Laravel\Jetstream\Http\Controllers\Livewire\TeamController::class);

