<?php

namespace App\Http\Controllers;
use App\Models\Mascotas;
use Illuminate\Http\Request;

class MascotasController extends Controller
{
    public function formularioMascotas(){

        return view('formularioMascotas');

     }

     public function productMascotas(Request $request){

        $mascotas = new Mascotas();
        $mascotas->name=$request->name;
        $mascotas->price=$request->price;
        $mascotas->save();
        return $mascotas;
     }
}
