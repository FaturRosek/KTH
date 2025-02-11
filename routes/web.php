<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KuisionerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Exports\KuisionerExport;
use Maatwebsite\Excel\Facades\Excel;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::get('/', [LoginController::class, 'index']);
// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::resource('/dashboard', DashboardController::class);
// Route::get('/kuisioner', [KuisionerController::class, 'index'])->name('kuisioner.index');
Route::resource('/kuisioner', KuisionerController::class);
Route::get('/login-form', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'login'])->name('admin.login');
// Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/export-kuisioner', function () {
    return Excel::download(new KuisionerExport, 'kuisioner.xlsx');
})->name('export.kuisioner');
