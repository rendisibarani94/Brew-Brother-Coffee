<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Admin;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('Home');
});

Route::get('/menu', function () {
    return view('Menu');
});

// Route::get('/booking', function () {
//     return view('Booking');
// });



Route::get('/review', function () {
    return view('Review');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/pemesanan', [PemesananController::class, 'index']);
Route::get('pesan/{id}', [App\Http\Controllers\PesanController::class, 'index'])->middleware('auth');
Route::post('pesan/{id}', [App\Http\Controllers\PesanController::class, 'pesan']);
Route::get('check-out', [App\Http\Controllers\PesanController::class, 'check_out'])->middleware('auth');
Route::delete('check-out/{id}', [App\Http\Controllers\PesanController::class, 'delete']);

Route::get('konfirmasi-check-out', [App\Http\Controllers\PesanController::class, 'konfirmasi']);

Route::get('profile', [App\Http\Controllers\ProfileController::class, 'index']);
Route::post('profile', [App\Http\Controllers\ProfileController::class, 'update']);

// Route::prefix('admin')->group(function(){
//     Route::get('/', [Admin\LoginAdminController::class, 'loginForm']);
//     Route::get('/login', [Admin\LoginAdminController::class, 'loginForm'])->name('admin.login');
//     Route::get('/home', [Admin\HomeController::class, 'index'])->name('admin.home');
// });

Route::group(['middleware' => ['auth', 'hakakses:admin']], function(){
    Route::resource('product', ProductController::class);
});
Route::get('dibeli', [App\Http\Controllers\DibeliController::class, 'index']);
Route::delete('dibeli/{id}', [App\Http\Controllers\DibeliController::class, 'delete']);

Route::get('pembelian', [App\Http\Controllers\PembelianController::class, 'index']);
Route::delete('pembelian/{id}', [App\Http\Controllers\PembelianController::class, 'delete']);

Route::get('event', [App\Http\Controllers\EventController::class, 'index']);
Route::post('event', [App\Http\Controllers\EventController::class, 'store']);


Route::get('galeri', [App\Http\Controllers\GaleriController::class, 'index']);


Route::get('/info-pembayaran', function () {
    return view('info-bayar');
});



