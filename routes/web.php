<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\InformationsController;
use App\Http\Controllers\GalleriesController;
use App\Http\Controllers\DownloadsController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AnnouncementsController;

Route::get('/', [PagesController::class, 'index'])->name('home');

Route::get('/profil/tentang-kami', [ProfilesController::class, 'about'])->name('about');
// Route::get('/profil/visi-misi', [ProfilesController::class, 'vision'])->name('vision');
Route::get('/profil/struktur-organisasi', [ProfilesController::class, 'organization'])->name('organization');
Route::get('/profil/tupoksi', [ProfilesController::class, 'duty'])->name('duty');

Route::get('/informasi/berita', [InformationsController::class, 'news'])->name('news');
Route::get('/informasi/pengumuman', [InformationsController::class, 'announcement'])->name('announcement');
Route::get('/informasi/agenda', [InformationsController::class, 'agenda'])->name('agenda');
Route::get('/informasi/inovasi', [InformationsController::class, 'innovation'])->name('innovation');
// Route::get('/informasi/program-unggulan', [InformationsController::class, 'featured'])->name('featured');

Route::get('/galeri/foto', [GalleriesController::class, 'photo'])->name('photo');
Route::get('/galeri/video', [GalleriesController::class, 'video'])->name('video');

Route::get('/unduh/produk', [DownloadsController::class, 'product'])->name('product');
Route::get('/unduh/regulasi', [DownloadsController::class, 'regulation'])->name('regulation');

Route::get('/kontak/kontak-penting', [ContactsController::class, 'importantContact'])->name('important-contact');
Route::get('/kontak/hubungi-kami', [ContactsController::class, 'contactUs'])->name('contact-us');

Route::get('/berita/detail/{slug}', [NewsController::class, 'news_detail'])->name('news-detail');
Route::get('/pengumuman/detail/{slug}', [AnnouncementsController::class, 'announcement_detail'])->name('announcement-detail');
