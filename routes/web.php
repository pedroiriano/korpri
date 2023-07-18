<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\InformationsController;
use App\Http\Controllers\PublicationsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AnnouncementsController;

Route::get('/', [PagesController::class, 'index'])->name('home');

Route::get('/profil/tentang-kami', [ProfilesController::class, 'about'])->name('about');
Route::get('/profil/visi-misi', [ProfilesController::class, 'vision'])->name('vision');
Route::get('/profil/landasan-hukum', [ProfilesController::class, 'legal'])->name('legal');
Route::get('/profil/struktur-organisasi', [ProfilesController::class, 'organization'])->name('organization');
Route::get('/profil/tupoksi', [ProfilesController::class, 'duty'])->name('duty');

Route::get('/informasi/produk', [InformationsController::class, 'product'])->name('product');
Route::get('/informasi/program-unggulan', [InformationsController::class, 'featured'])->name('featured');
Route::get('/informasi/inovasi', [InformationsController::class, 'innovation'])->name('innovation');
Route::get('/informasi/agenda', [InformationsController::class, 'agenda'])->name('agenda');

Route::get('/publikasi/berita', [PublicationsController::class, 'news'])->name('news');
Route::get('/publikasi/pengumuman', [PublicationsController::class, 'announcement'])->name('announcement');
Route::get('/publikasi/foto', [PublicationsController::class, 'photo'])->name('photo');
Route::get('/publikasi/video', [PublicationsController::class, 'video'])->name('video');

Route::get('/layanan/semua', [ServicesController::class, 'service'])->name('service');
Route::get('/layanan/regulasi', [ServicesController::class, 'regulation'])->name('regulation');

Route::get('/kontak/kontak-penting', [ContactsController::class, 'importantContact'])->name('important-contact');
Route::get('/kontak/hubungi-kami', [ContactsController::class, 'contactUs'])->name('contact-us');

Route::get('/berita/detail/{slug}', [NewsController::class, 'news_detail'])->name('news-detail');
Route::get('/pengumuman/detail/{slug}', [AnnouncementsController::class, 'announcement_detail'])->name('announcement-detail');
