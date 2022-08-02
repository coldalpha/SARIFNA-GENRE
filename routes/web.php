<?php

use Illuminate\Support\Facades\Auth;
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
    return view('auth.vLogin');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/jadwal', [App\Http\Controllers\HomeController::class, 'jadwal'])->name('jadwal');
Route::get('/pup', [App\Http\Controllers\HomeController::class, 'pup'])->name('pup');
Route::get('/hivaids', [App\Http\Controllers\HomeController::class, 'hivaids'])->name('hivaids');
Route::get('/lifeskill', [App\Http\Controllers\HomeController::class, 'lifeskill'])->name('lifeskill');
Route::get('/pernikahandini', [App\Http\Controllers\HomeController::class, 'pernikahandini'])->name('pernikahandini');
Route::get('/sekspranikah', [App\Http\Controllers\HomeController::class, 'sekspranikah'])->name('sekspranikah');
Route::get('/napza', [App\Http\Controllers\HomeController::class, 'napza'])->name('napza');
Route::get('/tentangkita', [App\Http\Controllers\HomeController::class, 'tentangkita'])->name('tentangkita');
Route::get('/stunting', [App\Http\Controllers\HomeController::class, 'stunting'])->name('stunting');
Route::get('/konseling', [App\Http\Controllers\HomeController::class, 'konseling'])->name('konseling');
Route::get('/setelan', [App\Http\Controllers\HomeController::class, 'setelan'])->name('setelan');
// Route::get('/update/{user:email}', [App\Http\Controllers\HomeController::class, 'update'])->name('update');
Route::put('update/{email}', [App\Http\Controllers\HomeController::class, 'update']);
