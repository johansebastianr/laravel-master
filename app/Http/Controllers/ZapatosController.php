<?php

namespace App\Http\Controllers;

use App\Models\Zapatos;
use Illuminate\Http\Request;

class ZapatosController extends Controller
{
    public function formularioZapatos(){

        return view('formularioZapatos');

     }

     public function productZapatos(Request $request){

        $zapatos = new zapatos();
        $zapatos ->name=$request->name;
        $zapatos ->price=$request->price;
        $zapatos ->save();
        return $zapatos ;
     }
}
