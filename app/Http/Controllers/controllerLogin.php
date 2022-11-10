<?php

namespace App\Http\Controllers;

use App\Http\Requests\validatorLogin;
use Illuminate\Http\Request;

class controllerLogin extends Controller
{
    function PostLogin(validatorLogin $req){
        
        return redirect()->route('VentArticulos')->with('exito', 'Paso');
        
    }
}
