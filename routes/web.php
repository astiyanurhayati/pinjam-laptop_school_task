<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ManageLaptopController;
use App\Http\Controllers\RayonController;
use App\Http\Controllers\RombelController;
use App\Models\ManageLaptop;
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
Route::group(['middleware' => 'isLogin'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('/rombel', RombelController::class);
    Route::resource('/rayon', RayonController::class);
    Route::resource('/manage-laptop', ManageLaptopController::class);
   


    Route::prefix('dahsboard')->group(function () {
        Route::get('/form', [FormController::class, 'form_dashboard'])->name('form.dashboard');
       Route::delete('/form/hapus/{id}',[FormController::class, 'destroy'])->name('form.destroy');
       Route::patch('/form/{id}', [FormController::class,'update_complated'])->name('updateComplated');
    });
});



Route::group(['middleware' => 'isGuest'], function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login/auth', [LoginController::class, 'auth'])->name('login.auth');
   
});

        
Route::prefix('form')->group(function () {
    Route::get('/', [FormController::class, 'index'])->name('form');
    Route::post('/store', [FormController::class, 'store'])->name('store');
});

Route::get('/', [FormController::class, 'page'])->name('page');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');



