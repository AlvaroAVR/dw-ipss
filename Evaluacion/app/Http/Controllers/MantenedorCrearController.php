<?php

namespace App\Http\Controllers;

use App\Models\ProyectoModel;
use Illuminate\Http\Request;

class MantenedorCrearController extends Controller
{
    //metodo post
    public function new($_nuevo)
    {
        //objeto nuevo 
        $registro = new ProyectoModel();
        $registro->setId($_nuevo->getId());
    }
}
