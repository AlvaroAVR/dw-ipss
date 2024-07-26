<?php

use App\Http\Controllers\MantenedorCrearController;
use App\Http\Controllers\MantenedorObtenerController;
use App\Http\Controllers\MantenedorActualizarPorIdController;
use App\Http\Controllers\MantenedorEliminarPorIdController;
use App\Http\Controllers\MantenedorObtenerPorIdController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('ProyectoView');
});

// * Se actualiza el archivo routes/web.php para que las rutas de los métodos del controlador sean más descriptivas	
Route::get('/proyectos', [MantenedorObtenerController::class, 'index'])->name('proyectos.index');
Route::get('/proyectos/create', [MantenedorCrearController::class, 'create'])->name('proyectos.create');
Route::post('/proyectos', [MantenedorCrearController::class, 'store'])->name('proyectos.store');
Route::get('/proyectos/{id}', [MantenedorObtenerPorIdController::class, 'show'])->name('proyectos.show');
Route::get('/proyectos/{id}/edit', [MantenedorActualizarPorIdController::class, 'edit'])->name('proyectos.edit');
Route::put('/proyectos/{id}', [MantenedorActualizarPorIdController::class, 'update'])->name('proyectos.update');
Route::get('/proyectos/{id}/delete', [MantenedorEliminarPorIdController::class, 'delete'])->name('proyectos.delete');
Route::delete('/proyectos/{id}', [MantenedorEliminarPorIdController::class, 'destroy'])->name('proyectos.destroy');
