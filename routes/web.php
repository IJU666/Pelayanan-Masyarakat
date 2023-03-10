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
    return view('landing-page');
});

Route::get('/tanggapan', function () {
    return view('admin.tanggapan', [
        'title' => 'Pengaduan',
        'judul' => 'Form Tanggapan'
    ]);
});

Route::get('/tambah', function () {
    return view('admin.tambah-pengguna', [
        'title' => 'Pengguna',
        'judul' => 'Tambah Pengguna'
    ]);
});

Route::get('/pengaduan', function () {
    return view('admin.pengaduan', [
        'title' => 'Pengaduan',
        'judul' => 'Tabel Data Pengaduan'
    ]);
});

Route::get('/hasil', function () {
    return view('admin.hasil-pengaduan', [
        'title' => 'Hasil',
        'judul' => 'Hasil Pengaduan'
    ]);
});

Route::get('/pengguna', function () {
    return view('admin.pengguna', [
        'title' => 'Pengguna',
        'judul' => 'Tabel Data Pengguna'
    ]);
});

Route::get('/masuk', function () {
    return view('auth.login');
});

Route::get('/daftar', function () {
    return view('auth.register');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
