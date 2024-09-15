<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CaptchaController;
use App\Http\Controllers\RegisterController;
use App\Models\SubPelayanan;


Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/pelayanan', function () {
    return view('pelayanan');
});
Route::get('/pelayanan', function () {
    $nama_sub = SubPelayanan::where('id_sub')->pluck('nama_sub');
    return view('pelayanan', ['nama_sub' => $nama_sub]);
});

Route::get('/instansi', function () {
    return view('instansi');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/visi', function () {
    return view('visi');
});
Route::get('/motto', function () {
    return view('motto');
});
Route::get('/etika', function () {
    return view('etika');
});
Route::get('/maklumat', function () {
    return view('maklumat');
});
Route::get('/pendidikan', function () {
    return view('pendidikan');
});
// Route::get('/', function () {
//     return view('dashboard');
// });

// Route untuk login
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

// Route untuk registrasi
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

// Middleware untuk rute yang memerlukan autentikasi
Route::middleware('auth')->group(function () {
    // Route::get('dashboardAdmin', [AdminController::class, 'dashboardAdmin'])->name('dashboardAdmin');
    //Routes untuk Profil (sudah fixx)
    Route::get('manage-profil', [AdminController::class, 'indexProfil'])->name('manage-profil.index');
    Route::get('manage-profil/create', [AdminController::class, 'createProfil'])->name('manage-profil.create');
    Route::post('manage-profil', [AdminController::class, 'storeProfil'])->name('manage-profil.store');
    Route::get('manage-profil/{id}/edit', [AdminController::class, 'editProfil'])->name('manage-profil.edit');
    Route::put('manage-profil/{id}', [AdminController::class, 'updateProfil'])->name('manage-profil.update');
    Route::delete('manage-profil/{id}', [AdminController::class, 'destroyProfil'])->name('manage-profil.destroy');

    //Routes untuk Profil (sudah fixx)
    Route::get('manage-fasilitas', [AdminController::class, 'indexFasilitas'])->name('manage-fasilitas.index');
    Route::get('manage-fasilitas/create', [AdminController::class, 'createFasilitas'])->name('manage-fasilitas.create');
    Route::post('manage-fasilitas', [AdminController::class, 'storeFasilitas'])->name('manage-fasilitas.store');
    Route::get('manage-fasilitas/{id}/edit', [AdminController::class, 'editFasilitas'])->name('manage-fasilitas.edit');
    Route::put('manage-fasilitas/{id}', [AdminController::class, 'updateFasilitas'])->name('manage-fasilitas.update');
    Route::delete('manage-fasilitas/{id}', [AdminController::class, 'destroyFasilitas'])->name('manage-fasilitas.destroy');

    Route::get('manage-pelayanan', [AdminController::class, 'indexPelayanan'])->name('manage-pelayanan.index');
    Route::get('manage-pelayanan/create', [AdminController::class, 'createPelayanan'])->name('manage-pelayanan.create');
    Route::post('manage-pelayanan', [AdminController::class, 'storePelayanan'])->name('manage-pelayanan.store');
    Route::get('manage-pelayanan/{id}/edit', [AdminController::class, 'editPelayanan'])->name('manage-pelayanan.edit');
    Route::put('manage-pelayanan/{id}', [AdminController::class, 'updatePelayanan'])->name('manage-pelayanan.update');
    Route::delete('manage-pelayanan/{id}', [AdminController::class, 'destroyPelayanan'])->name('manage-pelayanan.destroy');

    Route::get('manage-sub-pelayanan', [AdminController::class, 'indexSubPelayanan'])->name('manage-sub-pelayanan.index');
    Route::get('manage-sub-pelayanan/create', [AdminController::class, 'createSubPelayanan'])->name('manage-sub-pelayanan.create');
    Route::post('manage-sub-pelayanan', [AdminController::class, 'storeSubPelayanan'])->name('manage-sub-pelayanan.store');
    Route::get('manage-sub-pelayanan/{id}/edit', [AdminController::class, 'editSubPelayanan'])->name('manage-sub-pelayanan.edit');
    Route::put('manage-sub-pelayanan/{id}', [AdminController::class, 'updateSubPelayanan'])->name('manage-sub-pelayanan.update');
    Route::delete('manage-sub-pelayanan/{id}', [AdminController::class, 'destroySubPelayanan'])->name('manage-sub-pelayanan.destroy');

    Route::get('manage-syarat', [AdminController::class, 'indexSyarat'])->name('manage-syarat.index');
    Route::get('manage-syarat/create', [AdminController::class, 'createSyarat'])->name('manage-syarat.create');
    Route::post('manage-syarat', [AdminController::class, 'storeSyarat'])->name('manage-syarat.store');
    Route::get('manage-syarat/{id}/edit', [AdminController::class, 'editSyarat'])->name('manage-syarat.edit');
    Route::put('manage-syarat/{id}', [AdminController::class, 'updateSyarat'])->name('manage-syarat.update');
    Route::delete('manage-syarat/{id}', [AdminController::class, 'destroySyarat'])->name('manage-syarat.destroy');

    Route::get('manage-instansi', [AdminController::class, 'indexInstansi'])->name('manage-instansi.index');
    Route::get('manage-instansi/create', [AdminController::class, 'createInstansi'])->name('manage-instansi.create');
    Route::post('manage-instansi', [AdminController::class, 'storeInstansi'])->name('manage-instansi.store');
    Route::get('manage-instansi/{id}/edit', [AdminController::class, 'editInstansi'])->name('manage-instansi.edit');
    Route::put('manage-instansi/{id}', [AdminController::class, 'updateInstansi'])->name('manage-instansi.update');
    Route::delete('manage-instansi/{id}', [AdminController::class, 'destroyInstansi'])->name('manage-instansi.destroy');

    Route::get('manage-galeri', [AdminController::class, 'indexGaleri'])->name('manage-galeri.index');
    Route::get('manage-galeri/create', [AdminController::class, 'createGaleri'])->name('manage-galeri.create');
    Route::post('manage-galeri', [AdminController::class, 'storeGaleri'])->name('manage-galeri.store');
    Route::get('manage-galeri/{id}/edit', [AdminController::class, 'editGaleri'])->name('manage-galeri.edit');
    Route::put('manage-galeri/{id}', [AdminController::class, 'updateGaleri'])->name('manage-galeri.update');
    Route::delete('manage-galeri/{id}', [AdminController::class, 'destroyGaleri'])->name('manage-galeri.destroy');
});
