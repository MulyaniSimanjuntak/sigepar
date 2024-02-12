<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DataJemaatController;
use App\Http\Controllers\DataKeuanganController;
use App\Http\Controllers\DataSakramenController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\JemaatController;
use App\Http\Controllers\LandingpagesController;
use App\Http\Controllers\PendaftaranSakramenController;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\PengurusGerejaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\WorshipController;
use App\Http\Controllers\ProcedureController;

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


// Route Tanpa Login
Route::get('/', [LandingpagesController::class, 'index'])->name('login');
Route::get('/Curch Data', [LandingpagesController::class, 'v_curchdata']);
Route::get('/Worship Procedures', [LandingpagesController::class, 'v_worship']);
Route::get('/Announcement', [LandingpagesController::class, 'v_announcement']);
Route::get('/announcement/{id}/detail', [LandingpagesController::class, 'v_announcementDetail']);
Route::get('/About', [LandingpagesController::class, 'v_about']);
Route::post('/postlogin', [AuthController::class, 'postlogin']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'login']);
Route::post('/registerUser', [AuthController::class, 'registerUser']);
Route::post('/loginUsers', [AuthController::class, 'loginUsers']);
Route::post('/updateUserByID', [AuthController::class, 'updateUserByID']);
Route::post('/peneguhanSidiCreate', [JemaatController::class, 'peneguhanSidiCreate']);


// Route Halaman Admin
// Route::group(['middleware' => ['auth', 'CheckRole:admin,Pendeta,Pengurus,Sintua,Pimpinan Jemaat,Sektretarsi Jemaat,Bendahara Jemaat']], function () {
//     Route::get('/Dashboard_admin', [AdminController::class, 'index']);
//     // Route Data Jemaat
    // Route::get('/Data_Jemaat', [DataJemaatController::class, 'index']);
    // Route::get('/TambahData_Jemaat', [DataJemaatController::class, 'v_tambah']);
    // Route::post('/Data_jemaat/create', [DataJemaatController::class, 'create']);
    // Route::get('/DataJemaat/{id}/detail', [DataJemaatController::class, 'detail']);
    // Route::get('/DataJemaat/{id}/edit', [DataJemaatController::class, 'edit']);
    // Route::post('/DataJemaat/{id}/update', [DataJemaatController::class, 'update']);
//     route::get('/Datajemaat/{id}/delete', [DataJemaatController::class, 'delete']);
//     // Data keuangan
//     Route::get('/Data_Keuangan', [DataKeuanganController::class, 'index']);
//     //Data Sakramen
//     Route::get('/Sakramen_Baptis', [DataSakramenController::class, 'index']);
//     Route::get('/Sakramen_Baptis/detail', [DataSakramenController::class, 'detail']);
//     Route::get('/Peneguhan_Sidi', [DataSakramenController::class, 'peneguhan_sidi']);
//     Route::get('/Peneguhan_sidi/detail', [DataSakramenController::class, 'peneguhan_sidiDetail']);
//     Route::get('/Pernikahan', [DataSakramenController::class, 'pernikahan']);
//     Route::get('/Pernikahan/detail', [DataSakramenController::class, 'detailpernikahan']);
// });

// Route hanya bisa di akses admin
    Route::group(['middleware' => ['auth', 'CheckRole:admin,pengurus']], function () {
    Route::get('/Dashboard_pengurus', [PengurusController::class, 'index']);
    Route::get('/Data_Keuangan', [DataKeuanganController::class, 'index']);
    Route::get('/keuanganTambah', [DataKeuanganController::class, 'keuanganTambah']);
    Route::post('/keuanganCreate', [DataKeuanganController::class, 'keuanganCreate']);
    Route::get('/keuangan/{id}/delete', [DataKeuanganController::class, 'keuanganDelete']);
    Route::get('/keuangan/{id}/edit', [DataKeuanganController::class, 'keuanganEdit']);
    Route::post('/keuangan/{id}/update', [DataKeuanganController::class, 'keuanganUpdate']);
    Route::get('/Sakramen_Baptis', [DataSakramenController::class, 'index']);
    Route::get('/Sakramen_Baptis/detail/{id}', [DataSakramenController::class, 'detialBabtis']);
    Route::get('/Peneguhan_Sidi', [DataSakramenController::class, 'peneguhan_sidi']);
    Route::get('/Peneguhan_sidi/detail', [DataSakramenController::class, 'peneguhan_sidiDetail']);
    Route::get('/Pernikahan', [DataSakramenController::class, 'pernikahan']);
    Route::get('/Pernikahan/detail', [DataSakramenController::class, 'detailpernikahan']);
    Route::get('/Dashboard_admin', [AdminController::class, 'index']);
    Route::get('/Jemaat', [DataJemaatController::class, 'jemaat']);
    Route::get('/Data_Jemaat', [DataJemaatController::class, 'index']);
    Route::get('Datajemaat/{id}/delete', [DataJemaatController::class, 'jemaatDelete']);
    Route::get('/TambahData_Jemaat', [DataJemaatController::class, 'v_tambah']);
    Route::post('/Data_jemaat/create', [DataJemaatController::class, 'create']);
    Route::get('/DataJemaat/{id}/detail', [DataJemaatController::class, 'detail']);
    Route::get('/DataJemaat/{id}/edit', [DataJemaatController::class, 'edit']);
    Route::post('/DataJemaat/{id}/update', [DataJemaatController::class , 'update']);
    Route::get('/DataPengurus_Gereja', [PengurusGerejaController::class, 'index']);
    Route::get('/Dashboard_users', [Usercontroller::class, 'index']);
    Route::get('/DataPengurus_Gereja/tambah', [PengurusGerejaController::class, 'tambah_pengurus']);
    Route::post('/DataPengurus_Gereja/create', [PengurusGerejaController::class, 'create']);
    Route::get('/DataPengurus_Gereja/{id}/edit', [PengurusGerejaController::class, 'edit']);
    Route::post('/DataPengurus_gereja/{id}/update', [PengurusGerejaController::class, 'update']);
    Route::get('/Pernikahan/detail/{id}', [DataSakramenController::class, 'pernikahanDetail']);
    Route::get('/Peneguhan_sidi/detail/{id}', [DataSakramenController::class, 'peneguhan_sidiDetail']);
    Route::get('/pengumuman', [PengumumanController::class, 'index']);
    Route::get('/pengumuman/delete/{id}', [PengumumanController::class, 'deletePengumuman']);
    Route::get('/pengumuman/{id}/edit', [PengumumanController::class, 'pengumumanEdit']);
    Route::get('/tambahPengumuman', [PengumumanController::class, 'tambahPengumuman']);
    Route::get('/pengumuman/{id}/detail', [PengumumanController::class, 'pengumumanDetail']);
    Route::post('/updatePengumuman/{id}/edit', [PengumumanController::class, 'updatePengumuman']);
    Route::post('/pengumumanCreate', [PengumumanController::class, 'pengumumanCreate']);
    Route::get('/tambahGallery', [GalleryController::class, 'tambahGallery']);
    Route::post('/albumCreate', [GalleryController::class, 'albumCreate']);
    Route::get('/gallery', [GalleryController::class, 'index']);
    Route::get('/gallery/{id}/delete', [GalleryController::class, 'deleteGallery']);
    Route::get('/gallery/{id}/detail', [GalleryController::class, 'galleryDetail']);
    Route::post('/galleryCreate/{id}', [GalleryController::class, 'galleryCreate']);
    Route::get('/dataPengurus/{id}/edit', [PengurusGerejaController::class, 'edit']);
    Route::get('/dataPengurus/{id}/detail', [PengurusGerejaController::class, 'edit']);
    Route::get('dataPengurus/{id}/delete', [PengurusGerejaController::class, 'delete']);
    Route::get('galleryTambah/{id}/add', [GalleryController::class, 'galleryTambah']);
    Route::post('/galleryImageCreate/{id}', [GalleryController::class, 'galleryImageCreate']);
    Route::get('/gallery/{id}/delete/{idd}', [GalleryController::class, 'galleryDelete']);
    Route::get('/album/{id}/delete', [GalleryController::class, 'albumDelete']);
    Route::get('/album/{id}/edit', [GalleryController::class, 'albumEdit']);
    Route::post('/albumUpdate/{id}', [GalleryController::class, 'albumUpdate']);
    Route::get('/album/{id}/detail', [GalleryController::class, 'albumDetail']);
    Route::get('/slider', [SliderController::class, 'index']);
    Route::get('/tambahSlider', [SliderController::class, 'tambahSlider']);
    Route::post('/sliderCreate', [SliderController::class, 'sliderCreate']);
    Route::get('/slider/{id}/delete', [SliderController::class, 'sliderDelete']);
    Route::get('/slider/{id}/edit', [SliderController::class, 'sliderEdit']);
    Route::post('/sliderUpdate/{id}', [SliderController::class, 'sliderUpdate']);
    Route::get('/aboutus', [AboutController::class, 'index']);
    Route::post('/updateAbout', [AboutController::class, 'update']);
    Route::get('/worshipProcedure', [WorshipController::class, 'index']);
    Route::get('/worship/tambah', [WorshipController::class, 'worshipTambah']);
    Route::post('/worshipCreate', [WorshipController::class, 'worshipCreate']);
    Route::get('/worship/{id}/delete', [WorshipController::class, 'wordshipDelete']);
    Route::get('/worship/{id}/edit', [WorshipController::class, 'wordshipEdit']);
    Route::post('/worshipEdit/{id}', [WorshipController::class, 'wordshipUpdate']);
    Route::get('/procedure/{id}/index', [ProcedureController::class, 'index']);
    Route::get('/procedure/tambah/{id}', [ProcedureController::class, 'procedureTambah']);
    Route::post('/procedure/create/{id}', [ProcedureController::class, 'procedureCreate']);
    Route::get('/procedure/{id}/delete/{idPro}', [ProcedureController::class, 'procedureDelete']);
    Route::get('/procedure/{id}/edit/{idPro}', [ProcedureController::class, 'procedureEdit']);
    Route::post('/procedure/{id}/update/{idPro}', [ProcedureController::class, 'procedureUpdate']);
});
// Route untuk Jemaat
Route::group(['middleware' => ['auth', 'CheckRole:jemaat']], function () {
    Route::get('/Dashboard_jemaat', [JemaatController::class, 'index']);
    Route::get('/Dashboard_profile', [JemaatController::class, 'profile']);
    Route::get('/daftarBabtis', [JemaatController::class, 'daftarBabtis']);
    Route::post('/daftarBabtis/create', [JemaatController::class, 'create']);
    Route::get('/peneguhanSidi', [JemaatController::class, 'peneguhanSidi']);
    Route::get('/pernikahan', [JemaatController::class, 'pernikahan']);
    Route::post('/pernikahanCreate', [JemaatController::class, 'pernikahanCreate']);
    Route::post('/updatePernikahan', [JemaatController::class, 'updatePernikahan']);

 });

// Route untuk PengurusPernikahan/detail/1
// Route::group(['middleware' => ['auth', 'CheckRole:pengurus']], function () {
//     Route::get('/Dashboard_pengurus', [PengurusController::class, 'index']);
//     Route::get('/Data_Jemaat', [DataJemaatController::class, 'index']);
//     Route::get('/TambahData_Jemaat', [DataJemaatController::class, 'v_tambah']);
//     Route::post('/Data_jemaat/create', [DataJemaatController::class, 'create']);
//     Route::get('/DataJemaat/{id}/detail', [DataJemaatController::class, 'detail']);
//     Route::get('/DataJemaat/{id}/edit', [DataJemaatController::class, 'edit']);
//     Route::post('/DataJemaat/{id}/update', [DataJemaatController::class, 'update']);
//     route::get('/Datajemaat/{id}/delete', [DataJemaatController::class, 'delete']);
//     // Data keuangan
//     Route::get('/Data_Keuangan', [DataKeuanganController::class, 'index']);
//     //Data Sakramen
//     Route::get('/Sakramen_Baptis', [DataSakramenController::class, 'index']);
//     Route::get('/Sakramen_Baptis/detail', [DataSakramenController::class, 'detail']);
//     Route::get('/Peneguhan_Sidi', [DataSakramenController::class, 'peneguhan_sidi']);
//     Route::get('/Peneguhan_sidi/detail', [DataSakramenController::class, 'peneguhan_sidiDetail']);
//     Route::get('/Pernikahan', [DataSakramenController::class, 'pernikahan']);
//     Route::get('/Pernikahan/detail', [DataSakramenController::class, 'detailpernikahan']);
//  });