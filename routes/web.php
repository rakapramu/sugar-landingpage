<?php

use App\Http\Controllers\Admin\BahanController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\IntroduceController;
use App\Http\Controllers\Admin\ManfaatController;
use App\Http\Controllers\FrontendController;
use App\Models\Introduce;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [FrontendController::class, 'index']);



Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/introduce', IntroduceController::class);
    Route::resource('/bahan_baku', BahanController::class);
    Route::resource('/manfaat', ManfaatController::class);
    Route::resource('/gallery', GalleryController::class);
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
