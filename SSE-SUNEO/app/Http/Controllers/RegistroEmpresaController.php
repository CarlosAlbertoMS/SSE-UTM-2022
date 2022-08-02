<?php

namespace App\Http\Controllers;

use App\Models\User_empresas as User;
use App\Models\Encuesta_empresa as Encuesta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class RegistroEmpresaController extends Controller
{
    //
    public function view_perfil_empresa(){
        return view('Registro_Empresas.Ingreso_perfil_de_la_empresa');
    }

    public function view_encuesta_satisfaccion(){
        return view('Registro_Empresas.Ingreso_encuesta_de_satisfaccion');
    }

    public function create(Request $request){
        
        $user_empresa = new User;
        $user_empresa->fill([
            'user' => $request->user,
            'correo' => $request->correo,
            'password' => Crypt::encryptString($request->password),
            'remember_token' => $request->_token
        ])->save();

        return redirect('/Empresas/encuesta-de-satisfaccion');
    }

    public function stored_encuesta(Request $request){
        $encuesta_empresa = new Encuesta;
        $encuesta_empresa->pregunta_1 = $request->pregunta_1;
        if($request['pregunta_2'] == "Si")
            $encuesta_empresa->pregunta_2  = $request->pregunta_2 . ',' . implode(',',$request['pregunta_2_input']);
        else
            $encuesta_empresa->pregunta_2  = $request->pregunta_2;
        if($request['pregunta_3'] == "Si")
            $encuesta_empresa->pregunta_3 = $request->pregunta_3 . ',' . implode(',',$request['pregunta_3_input']);
        else
            $encuesta_empresa->pregunta_3 = $request->pregunta_3;
        $encuesta_empresa->pregunta_4 = implode(',',$request->pregunta_4);
        $encuesta_empresa->pregunta_5 = implode(',',$request->pregunta_5);
        if($request['pregunta_6'] == "Si")
            $encuesta_empresa->pregunta_6 = $request->pregunta_6  . ',' . implode(',',$request['pregunta_6_input']);
        else
            $encuesta_empresa->pregunta_6 = $request->pregunta_6;
        $encuesta_empresa->pregunta_7 = implode(',',$request->pregunta_7);
        $encuesta_empresa->pregunta_8 = implode(',',$request->pregunta_8);
        $encuesta_empresa->pregunta_9 = implode(',',$request->pregunta_9);
        $encuesta_empresa->pregunta_10a = $request->pregunta_10a;
        $encuesta_empresa->pregunta_10b = $request->pregunta_10b;
        $encuesta_empresa->pregunta_10c = $request->pregunta_10c;
        $encuesta_empresa->pregunta_10d = $request->pregunta_10d;
        $encuesta_empresa->pregunta_10e = $request->pregunta_10e;
        $encuesta_empresa->pregunta_10f = $request->pregunta_10f;
        if($request['pregunta_11'] == "No")
            $encuesta_empresa->pregunta_11 = $request->pregunta_11 . ',' . implode(',',$request['pregunta_11_input']);
        else
            $encuesta_empresa->pregunta_11 = $request->pregunta_11;
        $encuesta_empresa->pregunta_12 = $request->pregunta_12;
        $encuesta_empresa->save();

        return redirect('/');
    }
}
