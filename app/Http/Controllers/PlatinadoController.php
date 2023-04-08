<?php

namespace App\Http\Controllers;

use App\Models\Platinado;

use Illuminate\Http\Request;

class PlatinadoController extends Controller
{
    //
    public function index(){
        return view('paneles.platinado',);
    }
    public function store(Request $request){
        
        Platinado::create([ 
            'cantidadJ'=> $request-> cantidadJ,
            'nombreP1' => $request-> nombreP1,
            'cantidadP1' => $request-> cantidadP1,
            'nombreP2' => $request-> nombreP2,
            'cantidadP2' => $request-> cantidadP2,
            'nombreP3' => $request-> nombreP3,
            'cantidadP3' => $request-> cantidadP3,
            'nombreP4' => $request-> nombreP4,
            'cantidadP4' => $request-> cantidadP4,
            'nombreP5' => $request-> nombreP5,
            'cantidadP5' => $request-> cantidadP5,
            'nombreP6' => $request-> nombreP6,
            'cantidadP6' => $request-> cantidadP6,
            'nombreP7' => $request-> nombreP7,
            'cantidadP7' => $request-> cantidadP7,
            'nombreP8' => $request-> nombreP8,
            'cantidadP8' => $request-> cantidadP8,
            'nombreP9' => $request-> nombreP9,
            'cantidadP9' => $request-> cantidadP9,
            'nombreP10' => $request-> nombreP10,
            'cantidadP10' => $request-> cantidadP10,
            'nombreP11' => $request-> nombreP11,
            'cantidadP11' => $request-> cantidadP11,
            'nombreP12' => $request-> nombreP12,
            'cantidadP12' => $request-> cantidadP12,
            'observacioes' =>$request->observaciones,
            'detalles' =>$request->detalles

            
            
        ]);


    
    }
    
}
