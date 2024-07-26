<?php
// * Se actualiza controlador para ser usado con las vistas de la carpeta views/proyectos
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProyectoModel;

class MantenedorCrearController extends Controller
{
    public function create()
    {
        return view('proyectos.create');
    }

    public function store(Request $request)
    {
        ProyectoModel::addProject($request->all());
        return redirect()->route('proyectos.index');
    }
}

