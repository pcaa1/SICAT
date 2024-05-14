<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Obtener datos del formulario
        $user = $request->input('User');
        $password = $request->input('pass');

        // Llamar al procedimiento almacenado
        $result = DB::select('CALL sp_login(?, ?, @Tipo, @IdUsuario)', [$user, $password]);

        // Obtener resultados del procedimiento almacenado
        $tipo = DB::select('SELECT @Tipo as tipo')[0]->tipo;
        $idUsuario = DB::select('SELECT @IdUsuario as id')[0]->id;

        // Verificar resultados y redirigir según sea necesario
        if ($idUsuario !== null) {
            // Usuario autenticado, almacenar en sesión y redirigir
            session(['id' => $idUsuario]);
            return redirect()->route('inicio');
        } else {
            // Error de autenticación, redirigir a la página de inicio de sesión con un mensaje de error
            echo "<script>swal({title: 'Acceso denegado', text: 'El usuario o la contraseña son incorrectos', button: 'Ok'});</script>";
            //return redirect()->back()->with('error', 'El usuario o la contraseña son incorrectos');
        }
    }
}
