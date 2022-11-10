<?php

namespace App\Http\Controllers;

use App\Http\Requests\validatorLogin;
use App\Http\Requests\ValidatorSignUp;
use Illuminate\Http\Request;

class controllerLogin extends Controller
{
    function PostLogin(validatorLogin $req){
        return redirect()->route('VentArticulos')->with('exito', 'Paso');
    }
    function PostSignUp(ValidatorSignUp $req){
        return redirect()->route('RegistrarTrabajador')->with('exito', 'Paso');
    }
}