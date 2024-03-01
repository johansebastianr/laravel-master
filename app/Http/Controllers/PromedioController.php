<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromedioController extends Controller
{
    public function formularioPromedio()
    {
        return view('Promedio');
    }

    public function procedimiento(Request $request)
    {
        $nota1 = $request->input('nota1');
        $nota2 = $request->input('nota2');
        $nota3 = $request->input('nota3');

        $sumatoria = ($nota1 + $nota2 + $nota3) / 3;

        return view('Promedio', compact('nota1', 'nota2', 'nota3', 'sumatoria'));
    }
}

