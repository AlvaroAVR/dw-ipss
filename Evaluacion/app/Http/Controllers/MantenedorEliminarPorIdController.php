<?php
// * Se actualiza el controlador para que se pueda eliminar un proyecto por su id
namespace App\Http\Controllers;

use App\Models\ProyectoModel;

class MantenedorEliminarPorIdController extends Controller
{
    public function delete($id)
    {
        $proyecto = ProyectoModel::findProject($id);
        return view('proyectos.delete', compact('proyecto'));
    }

    public function destroy($id)
    {
        ProyectoModel::deleteProject($id);
        return redirect()->route('proyectos.index');
    }
}
