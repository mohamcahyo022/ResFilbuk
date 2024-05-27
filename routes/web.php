<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BukuStoreController;
use App\Http\Controllers\FilmStoreController;
use GuzzleHttp\Middleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware  group. Make something great!
|
*/

Route::get('/', [UserController::class, 'index']);
Route::get('/register', [UserController::class, 'register_view'])->middleware('guest');
Route::post('/register', [UserController::class, 'register']);
Route::get('/login', [UserController::class, 'login_view'])->middleware('guest')->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);

Route::get('/admin', [UserController::class, 'admin_view'])->middleware('admin');
Route::get('/user', [UserController::class, 'user_view'])->middleware('auth');

Route::get('/semua-film', [FilmController::class, 'film_all']);
Route::get('/detail-film/{id}', [FilmController::class, 'film_detail']);

Route::get('/semua-buku', [BukuController::class, 'buku_all']);
Route::get('/detail-buku/{id}', [BukuController::class, 'buku_detail']);

Route::get('/perpus', [BukuStoreController::class, 'perpus_all']);
Route::get('/detail-perpus/{id}', [BukuStoreController::class, 'buku_detail']);

Route::get('/movie', [FilmStoreController::class, 'movie_all']);
Route::get('/detail-movie/{id}', [FilmStoreController::class, 'movie_detail']);

Route::get('/kelola-film', [FilmController::class, 'kelola_film'])->name('kelola-film');
Route::get('/kelola-buku', [BukuController::class, 'kelola_buku'])->name('kelola-buku');
Route::get('/kelola-film-admin', [FilmController::class, 'kelola_film_admin'])->name('kelola-film-admin');
Route::get('/kelola-buku-admin', [BukuController::class, 'kelola_buku_admin'])->name('kelola-buku-admin');
Route::get('/kelola-user', [UserController::class, 'kelola_user'])->name('kelola-user');
Route::get('/kelola-perpus', [BukuStoreController::class, 'kelola_perpus'])->name('kelola-perpus');
Route::get('/kelola-movie', [FilmStoreController::class, 'kelola_movie'])->name('kelola-movie');

Route::put('/edit-film/{id}', [FilmController::class, 'edit_film']);
Route::put('/edit-buku/{id}', [BukuController::class, 'edit_buku']);
Route::put('/edit-user/{id}', [UserController::class, 'edit_user']);
Route::put('/edit-perpus/{id}', [BukuStoreController::class, 'edit_perpus']);
Route::put('/edit-movie/{id}', [FilmStoreController::class, 'edit_movie']);

Route::put('/proses-edit-film/{id}', [FilmController::class, 'proses_edit_film']);
Route::put('/proses-edit-buku/{id}', [BukuController::class, 'proses_edit_buku']);
Route::put('/proses-edit-user/{id}', [UserController::class, 'proses_edit_user']);
Route::put('/proses-edit-perpus/{id}', [BukuStoreController::class, 'proses_edit_perpus']);
Route::put('/proses-edit-movie/{id}', [FilmStoreController::class, 'proses_edit_movie']);

Route::delete('/hapus-film/{id}', [FilmController::class, 'hapus_film']);
Route::delete('/hapus-film-admin/{id}', [FilmController::class, 'hapus_film_admin']);
Route::delete('/hapus-buku/{id}', [BukuController::class, 'hapus_buku']);
Route::delete('/hapus-buku-admin/{id}', [BukuController::class, 'hapus_buku_admin']);
Route::delete('/hapus-user/{id}', [UserController::class, 'hapus_user']);
Route::delete('/hapus-perpus/{id}', [BukuStoreController::class, 'hapus_perpus']);
Route::delete('/hapus-movie/{id}', [FilmStoreController::class, 'hapus_movie']);

Route::get('/buat-film', [FilmController::class, 'lihat_film']);
Route::post('/buat-film', [FilmController::class, 'buat_film']);

Route::get('/buat-buku', [BukuController::class, 'lihat_buku']);
Route::post('/buat-buku', [BukuController::class, 'buat_buku']);

Route::get('/buat-buku-store', [BukuStoreController::class, 'lihat_buku_store']);
Route::post('/buat-buku-store', [BukuStoreController::class, 'buat_buku_store']);

Route::get('/buat-film-store', [FilmStoreController::class, 'lihat_film_store']);
Route::post('/buat-film-store', [FilmStoreController::class, 'buat_film_store']);


