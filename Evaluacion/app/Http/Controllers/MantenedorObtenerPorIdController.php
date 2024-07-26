<?php
// * Se actualiza controlador para ser usado con las vistas de la carpeta views/proyectos
namespace App\Http\Controllers;

use App\Models\ProyectoModel;

class MantenedorObtenerPorIdController extends Controller
{
    public function show($id)
    {
        $proyecto = ProyectoModel::findProject($id);
        return view('proyectos.show', compact('proyecto'));
    }
}
