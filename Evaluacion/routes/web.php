<?php

use App\Http\Controllers\MantenedorActualizarPorIdController;
use App\Http\Controllers\MantenedorCrearController;
use App\Http\Controllers\MantenedorEliminarPorIdController;
use App\Http\Controllers\MantenedorObtenerController;
use App\Http\Controllers\MantenedorObtenerPorIdController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('ProyectoView');
});

Route::get('/proyecto', function () {
    $control = new MantenedorObtenerController();
    $retorno = $control->get();
    return $retorno;
    //return view('ProyectoView');
});

Route::get('/proyecto/{_id}', function ($_id) {
    $control = new MantenedorObtenerPorIdController();
    $retorno = $control->get($_id);
    return $retorno;
});

Route::post('/proyecto', function () {
    $control = new MantenedorCrearController();
});

Route::delete('proyecto/{_id}', function ($_id) {
    $control = new MantenedorEliminarPorIdController();
});

Route::patch('proyecto/{_id}', function ($_id, $_nuevo) {
    $control = new MantenedorActualizarPorIdController();
});
