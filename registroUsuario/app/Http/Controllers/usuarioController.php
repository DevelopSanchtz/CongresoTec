<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;



class usuarioController extends Controller
{
    public function index()
    {
        $usuario = usuario::all();
        return $usuario;
    }

    public function sendEmail(Request $request)
    {
        $usuario = new usuario;

        $asunto = "CONGRESO TEC MANTE 2020";
        $destinatario = $request->correo;

        view('correoConfirmacion', ['nombreCompleto' => $request->nombreCompleto]);


        Mail::send('correoConfirmacion', $request->all(), function ($msj) use ($asunto, $destinatario) {
            $msj->from('armando.sanchtz@gmail.com', "INSTITUTO TECNOLOGICO SUPERIOR DE EL MANTE");
            $msj->subject($asunto);
            $msj->to($destinatario);
        });

        return redirect()->back();
    }

    public function registrar(Request $request)
    {
        $usuario = new usuario;
        $usuario->nombreCompleto       = $request->nombreCompleto;
        $usuario->fechaNacimiento      = $request->fechaNacimiento;
        $usuario->sexo                 = $request->sexo;
        $usuario->paisProcedencia      = $request->paisProcedencia;
        $usuario->estadoProcedencia    = $request->estadoProcedencia;
        $usuario->correo               = $request->correo;
        $usuario->carrera              = $request->carrera;
        $usuario->semestre             = $request->semestre;
        $usuario->institutoProcedencia = $request->institutoProcedencia;

        $usuario->save();
    }

    public function contacto(Request $request)
    {
        $nombre = $request->nombre;
        $correo = $request->correo;
        $mensaje = $request->mensaje;

        $asunto = "DUDAS CONGRESO";
        $destinatario = 'tovar.sanchez.17266@itsmante.edu.mx';

        view('dudas', ['nombre' => $nombre, 'correo' => $correo, 'mensaje' => $mensaje]);

        Mail::send('dudas', $request->all(), function ($msj) use ($asunto, $destinatario) {
            $msj->from('armando.sanchtz@gmail.com', "INSTITUTO TECNOLOGICO SUPERIOR DE EL MANTE");
            $msj->subject($asunto);
            $msj->to($destinatario);
        });
    }
}