<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataMigrationController;
use App\Http\Controllers\DeudaController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\IngresosController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\PendienteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::post('/registrar/calculos', [DashboardController::class, 'store'])->name('calcular.store');
Route::get('ultimo-ingreso', [DashboardController::class, 'ultimoIngreso'])->name('api.ultimo_ingreso');


Route::resource('deudas', DeudaController::class);
Route::resource('pagos', PagoController::class);
Route::resource('eventos', EventoController::class);

Route::resource('pendientes', PendienteController::class);
Route::get('pendientes/toggle-estado/{id_pendiente}', [PendienteController::class, 'toggleEstado'])->name('pendientes.toggleEstado');


Route::resource('ingresos', IngresosController::class);

Route::get('/migrate-data', [DataMigrationController::class, 'migrateData'])->name('migrate.data');


require __DIR__.'/auth.php';
