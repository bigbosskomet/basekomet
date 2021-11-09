<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\UploadpersyaratanController;
use App\Http\Controllers\OlimpiadeController;
use App\Http\Controllers\WebinarController;
use GuzzleHttp\Middleware;
use Illuminate\Routing\RouteGroup;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Welcome Landing Page
Route::get('/', [LandingpageController::class,'index'])->name('landingpage');
// Login

Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/postLogin',[LoginController::class,'postLogin'])->name('postLogin');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

// Middleware
Route::group(['middleware'=>['auth','ceklevel:admin,dosen,mahasiswa']],function() {
    // dashboard
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
    // Profil
    Route::get('/profil', [ProfilController::class,'index'])->name('profil');
    // Upload Persyaratan
    Route::get('/uploadpersyaratan', [UploadpersyaratanController::class,'index'])->name('uploadpersyaratan');
    
    // daftar
    // daftar user
    
    // Olimpiade
    Route::get('/olimpiade', [OlimpiadeController::class,'index'])->name('olimpiade');

    // Webinar
    Route::get('/webinar', [WebinarController::class,'index'])->name('webinar');

    
});
