<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class nombreController extends Controller
{
    public function nombreCorreo(Request $request)
    {
        //$usuario = new usuario();

        //$usuario->nombre = $request->nombre;

        $usuario = "Armando";

        return view('correoConfirmacion', compact($usuario));
    }
}
