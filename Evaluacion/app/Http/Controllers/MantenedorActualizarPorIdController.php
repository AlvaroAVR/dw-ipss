<?php
// * Se actualiza controlador para ser usado con las vistas de la carpeta views/proyectos
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProyectoModel;

class MantenedorActualizarPorIdController extends Controller
{
    public function edit($id)
    {
        $proyecto = ProyectoModel::findProject($id);
        return view('proyectos.edit', compact('proyecto'));
    }

    public function update(Request $request, $id)
    {
        ProyectoModel::updateProject($id, $request->all());
        return redirect()->route('proyectos.index');
    }
}
