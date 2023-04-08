@extends('layouts.app')

@section('titulo')

<div class="flex gap-2 items-center" >
    <div class="container mx-auto  justify-between items-center">
    <div class="pt-5 pb-3">WELCOME</div>


@auth

    
    <button  class="bg-orange-500 hover:bg-indigo-400 rounded-md p-2 cfont-bold uppercase text-sm" type="submit">
         <a href="{{route('menu.index',['user'=>auth()->user()->username])}}" class="font-semibold text-l p-1  m-0" >Ir a menu </a>
      </button>


    @endauth

</div>
</div> 
@endsection


@section('contenido')

    

<div class="container mx-auto flex justify-between items-center">
    
    <div class="md:w-6/12 p-5">
        <img src="{{asset('img/dos.jpg')}}" alt="">
    </div>   
    <div class="md:w-6/12 p-5">
        <img src="{{asset('img/four.jpg')}}" alt="">
    </div>   
    
</div>
 


@endsection