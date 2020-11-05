<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\usuarioController;
use App\Models\usuario;

class sendEmailController extends Controller
{

    public function contacto(Request $request)
    {
        $usuario = new usuario;

        $usuario->correo = $request->correo;

        $asunto = "CONGRESO TEC MANTE 2020";
        $destinatario = $request->correo;

        Mail::send('correoConfirmacion', $request->all(), function ($msj) use ($asunto, $destinatario) {
            $msj->from('armando.sanchtz@gmail.com', "INSTITUTO TECNOLOGICO SUPERIOR DE EL MANTE");
            $msj->subject($asunto);
            $msj->to($destinatario);
        });

        return redirect()->back();
    }
}
