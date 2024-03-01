<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimoController extends Controller
{
    public function create()
    {
        return view('Formulario');
    }

    public function store(Request $request)
    {
        $numero = $request -> input('numero');

        if ($this-> esPrimo($numero)) {
            $mensaje = "El número {$numero} es primo.";
        } else {
            $mensaje = "El número {$numero} no es primo.";
        }

        return view('Formulario', ['mensaje' => $mensaje]);
    }

    public function esPrimo($numero)
    {
        if ($numero <= 1) {
            return false;
        }

        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i === 0) {
                return false;
            }
        }

        return true;
    }
}
