<?php

use App\Http\Controllers\CitaController;
use App\Http\Controllers\EspecialidadController;
use App\Http\Controllers\MedicamentoController;
use App\Http\Controllers\MedicoController;
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


Route::middleware(['auth'])->group(function () {
    /* Rutas propias */
    // Pongo las rutas de citas antes de las de recurso para que no matchee antes un show de citas, por ejemplo
    // Fíjate en que a estas rutas les añado un middleware de tipo can para que primero autorice al usuario a realizar la acción llamando a los métodos attach_medicamento y detach_medicamento de CitaPolicy.
    // Podríamos haberlo hecho directamente dentro de los métodos en el controlador con $this->authorize('attach_medicamento', $cita); y $this->authorize('detach_medicamento', $cita);, respectivamente
    Route::post('/citas/{cita}/attach-medicamento', [CitaController::class, 'attach_medicamento'])
        ->name('citas.attachMedicamento')
        ->middleware('can:attach_medicamento,cita');
    Route::delete('/citas/{cita}/detach-medicamento/{medicamento}', [CitaController::class, 'detach_medicamento'])
        ->name('citas.detachMedicamento')
        ->middleware('can:detach_medicamento,cita');
    Route::resources([
        'citas' => CitaController::class,
        'especialidads' => EspecialidadController::class,
        'medicamentos' => MedicamentoController::class,
    ]);
});

/* Ejemplo: Estas 7 rutas son las que se crean, por ejemplo, con la ruta de tipo recurso de citas. Lo mismo con el resto de controladores de tipo recurso
Route::get('/citas', [CitaController::class, 'index'])->name('citas.index');
Route::get('/citas/create', [CitaController::class, 'create'])->name('citas.create');
Route::post('/citas', [CitaController::class, 'store'])->name('citas.store');
Route::get('/citas/{cita}', [CitaController::class, 'show'])->name('citas.show');
Route::get('/citas/{cita}/edit', [CitaController::class, 'edit'])->name('citas.edit');
Route::put('/citas/{cita}', [CitaController::class, 'update'])->name('citas.update');
Route::delete('/citas/{cita}', [CitaController::class, 'destroy'])->name('citas.destroy');
*/

require __DIR__.'/auth.php';
