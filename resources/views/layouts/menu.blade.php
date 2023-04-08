@extends('layouts.app')

@section('contenido')

    

<div class="container mx-auto flex justify-between items-center">
@auth
    <div class="md:w-6/18 p-5">
      
          <button  class="bg-orange-500 hover:bg-indigo-400 rounded-md p-2 cfont-bold uppercase text-sm" type="submit">
             <a href="{{route('registro',['user'=>auth()->user()->username])}}"><span class="font-semibold text-lg p-1">PANEL DE REGISTRO</span> </a>
            </button>
         

        
    </div>   

    <div class="md:w-6/18 p-5">
       
      <button  class="bg-orange-500 hover:bg-indigo-400 rounded-md p-2 cfont-bold uppercase text-sm" type="submit">
        <a href="{{route('consulta',['user'=>auth()->user()->username])}}"><span class="font-semibold text-lg p-1">PANEL DE CONSULTA</span> </a>
       </button>
    
    </div>   
    <div class="md:w-6/18 p-5">
       
      <button  class="bg-orange-500 hover:bg-indigo-400 rounded-md p-2 cfont-bold uppercase text-sm" type="submit">
        <a href="{{route('edicion',['user'=>auth()->user()->username])}}"><span class="font-semibold text-lg p-1">PANEL DE EDICION</span> </a>
       </button>
    
          
    </div>   
    @endauth
    
</div>




 
@endsection