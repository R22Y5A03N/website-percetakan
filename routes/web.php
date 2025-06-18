<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;  
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\Authenticate;   
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\AuthController;    


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
    return view('welcome');
});



Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');

// Admin (dalam middleware auth & admin)
Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('admin/produk', ProdukController::class)->except('index', 'show');
});

// untuk login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin routes
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    // Gunakan adminIndex untuk route index
    Route::get('/produk', [ProdukController::class, 'adminIndex'])->name('produk.index');
    Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.create');
    Route::post('/produk', [ProdukController::class, 'store'])->name('produk.store');
    Route::get('/produk/{produk}/edit', [ProdukController::class, 'edit'])->name('produk.edit');
    Route::put('/produk/{produk}', [ProdukController::class, 'update'])->name('produk.update');
    Route::delete('/produk/{produk}', [ProdukController::class, 'destroy'])->name('produk.destroy');
});


