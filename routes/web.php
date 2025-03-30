<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [HomeController::class, 'index']);

Route::controller(AdminController::class)->group(function () {
    Route::get('panel/dashboard', 'dashboard');
    Route::get('panel/fotodaftar', 'fotodaftar');
    Route::post('panel/fotodaftarcari', 'fotodaftarcari');
    Route::get('panel/fototambah', 'fototambah');
    Route::post('panel/fototambahsimpan', 'fototambahsimpan');
    Route::get('panel/fotoedit/{id}', 'fotoedit');
    Route::post('panel/fotoeditsimpan/{id}', 'fotoeditsimpan');
    Route::get('panel/fotohapus/{id}', 'fotohapus');
    Route::get('panel/videodaftar', 'videodaftar');
    Route::post('panel/videodaftarcari', 'videodaftarcari');
    Route::get('panel/videotambah', 'videotambah');
    Route::post('panel/videotambahsimpan', 'videotambahsimpan');
    Route::get('panel/videoedit/{id}', 'videoedit');
    Route::post('panel/videoeditsimpan/{id}', 'videoeditsimpan');
    Route::get('panel/videohapus/{id}', 'videohapus');
    Route::get('panel/blogdaftar', 'blogdaftar');
    Route::post('panel/blogdaftarcari', 'blogdaftarcari');
    Route::get('panel/blogtambah', 'blogtambah');
    Route::post('panel/blogtambahsimpan', 'blogtambahsimpan');
    Route::get('panel/blogedit/{id}', 'blogedit');
    Route::post('panel/blogeditsimpan/{id}', 'blogeditsimpan');
    Route::get('panel/bloghapus/{id}', 'bloghapus');
    Route::get('panel/usersdaftar', 'usersdaftar');
    Route::get('panel/userstambah', 'userstambah');
    Route::post('panel/userstambahsimpan', 'userstambahsimpan');
    Route::get('panel/usersedit/{id}', 'usersedit');
    Route::post('panel/userseditsimpan/{id}', 'userseditsimpan');
    Route::get('panel/usershapus/{id}', 'usershapus');

    Route::get('panel/profil', 'profil');
    Route::get('panel/profiledit', 'profiledit');
    Route::post('panel/profileditsimpan', 'profileditsimpan');

    Route::get('panel/logout', 'logout');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('fotodaftar', 'fotodaftar');
    Route::post('fotodaftarcari', 'fotodaftarcari');
    Route::get('fotodetail/{id}', 'fotodetail');
    Route::get('videodaftar', 'videodaftar');
    Route::post('videodaftarcari', 'videodaftarcari');
    Route::get('videodetail/{id}', 'videodetail');
    Route::get('blogdaftar', 'blogdaftar');
    Route::post('blogdaftarcari', 'blogdaftarcari');
    Route::get('blogdetail/{id}', 'blogdetail');
    Route::get('profiledit', 'profiledit');
    Route::get('login', 'login');
    Route::post('logincek', 'logincek');
    // about
    Route::get('about', 'about');
    // contact
    Route::get('contact', 'contact');
    // galeri
    Route::get('galeri', 'galeri');
    // video
    Route::get('videos', 'video');
    // blog
    Route::get('blogs', 'blog');
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
