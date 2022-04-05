<?php
use App\Models\Berita;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\PutusanController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\FileManagerController;
use App\Http\Controllers\DashboardberitaController;
use App\Http\Controllers\DashboardPutusanMediasiController;
use App\Http\Controllers\DashboardPutusanAjudikasiController;

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
    return view('home', [
        "title" => "Selamat Datang",
        "active" => "home",
        "slider" => Berita::all()
    ]);
});
Route::get('/jadwal', [JadwalController::class,'index']);
Route::get('/jadwal/{jadwal:judulslug}', [jadwalController::class, 'show']);

Route::get('ajudikasi', [PutusanController::class, 'ajudikasi']);
Route::get('mediasi', [PutusanController::class, 'mediasi']);
Route::get('sela', [PutusanController::class, 'sela']);

Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita/{berita:slug}', [BeritaController::class, 'show']);
Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/sign/admin/login', [LoginController::class, 'index' ])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate' ]);
Route::post('/logout', [LoginController::class, 'logout' ]);

Route::get('/add/user', [RegisterController::class, 'index' ])->middleware('auth');
Route::post('/register', [RegisterController::class, 'store' ]);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/berita/checkSlug',[DashboardberitaController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/berita', DashboardberitaController::class)->middleware('auth');
Route::resource('/dashboard/ajudikasi', DashboardPutusanAjudikasiController::class)->middleware('auth');
Route::resource('/dashboard/mediasi', DashboardPutusanMediasiController::class)->middleware('auth');

Route::get('/dashboard/fm', [FileManagerController::class, 'index'])->middleware('auth');