<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tentang', function () {
    return view('about');
})->name('about');

Route::get('/pedoman-penulisan-skripsi', function () {
    return view('pedomanSkripsi');
})->name('pedomanSkripsi');

Route::get('/alur-skripsi', function () {
    return view('alurSkripsi');
})->name('alurSkripsi');

Route::get('/pedoman-akademik', function () {
    return view('pedomanAkademik');
})->name('pedomanAkademik');

Route::get('/pengajuan-sempro', function () {
    return view('pengajuanSempro');
})->name('pengajuanSempro');

Route::get('/pengajuan-semhas', function () {
    return view('pengajuanSemhas');
})->name('pengajuanSemhas');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
