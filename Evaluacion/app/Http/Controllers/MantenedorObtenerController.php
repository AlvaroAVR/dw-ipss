<?php
// * Se actualiza controlador para ser usado con las vistas de la carpeta views/proyectos
namespace App\Http\Controllers;

use App\Models\ProyectoModel;

class MantenedorObtenerController extends Controller
{
    public function index()
    {
        $proyectos = ProyectoModel::allProjects();
        return view('proyectos.index', compact('proyectos'));
    }
}
