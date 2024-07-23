<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MantenedorObtenerPorIdController extends Controller
{
    public function get($_id)
    {
        return "valores del id: {$_id}";
    }
}
