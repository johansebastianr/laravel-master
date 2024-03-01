<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AmigoController extends Controller
{
    public function formularioAmigo()
    {
        return view('Amigo');
    }

    public function calculo(Request $request)
{
    $numero1 = $request->input('numero1');
    $numero2 = $request->input('numero2');

    if ($this->esAmigo($numero1, $numero2)) {
        $mensaje = "Los números {$numero1} y {$numero2} son amigos.";
    } else {
        $mensaje = "Los números {$numero1} y {$numero2} no son amigos.";
    }

    return view('formulario', ['mensaje' => $mensaje]);
}

    public function esAmigo($numero1, $numero2)
{
    $sumDivisores1 = $this->sumarDivisores($numero1);
    $sumDivisores2 = $this->sumarDivisores($numero2);

    return ($numero1 == $sumDivisores2) && ($numero2 == $sumDivisores1);
}

    public function sumarDivisores($numero)
    {
        $suma = 1;

        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i === 0) {
                $suma += $i;
                if ($i !== $numero / $i) {
                    $suma += $numero / $i;
                }
            }
        }

        return $suma;
    }
}
