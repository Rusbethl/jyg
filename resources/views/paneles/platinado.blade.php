@extends('layouts.app')


@section('contenido')
@push('styles')
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    
@endpush


<div class="flex justify-center align-middle">
    <div class="md:w-9/12 bg-white p-6 rounded-lg shadow">
        <form method="POST" action="{{route('platinado',['user'=>auth()->user()->username])}}">
            @csrf

            <div class="container mb-10 w-50 ">
            <div class="mb-5">   
                <label for="cantidadJ" class="mb-2 block uppercase text-gray-500 font-bold">Cantidad Jaula</label>

                <input type="number" name="cantidadJ" id="cantidadJ" value="{{old('cantidadJ')}}" class="w-45 border p-3 rounded-lg 
                @error('cantidadJ') border-red-500 @enderror">
                @error('cantidadJ')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>
            
        </div>


            <div class="">
               <div class="container columns-4 mb-10 w-30 ml-10" >

                 <label for="nombreP1"  class="mb-10 uppercase text-gray-500 font-bold">Nombre de pieza</label>
                 
                 <select name="nombreP1" id="nombreP1">
                     <option value="" disabled selected>-- Selecciona --</option>
                     <option value="">X</option>
                     <option value=" ">X</option>
                     <option value=" ">X</option>
                     <option value="">X</option>
                     <option value="">X</option>
                     <option value=" ">X</option>
                     <option value=" ">X</option>
                     <option value="">X</option>
                 </select>
                <div>
                    <label for="cantidadP1" class="mb-10 uppercase text-gray-500 font-bold mr-3">Cantidad</label>
                 
                    <input type="number" name="cantidadP1" id="cantidadP1" value="{{old('cantidadP1')}}" class=" border p-3 rounded-lg 
                    @error('cantidadP1') border-red-500 @enderror">
                </div>
                <label for="nombreP2"  class="mb-10 uppercase text-gray-500 font-bold">Nombre de pieza</label>
                 
                 <select name="nombreP2" id="nombreP2">
                     <option value="" disabled selected>-- Selecciona --</option>
                     <option value="">X</option>
                     <option value=" ">X</option>
                     <option value=" ">X</option>
                     <option value="">X</option>
                     <option value="">X</option>
                     <option value=" ">X</option>
                     <option value=" ">X</option>
                     <option value="">X</option>
                 </select>
                <div>
                    <label for="cantidadP2" class="mb-10 uppercase text-gray-500 font-bold mr-3">Cantidad</label>
                 
                    <input type="number" name="cantidadP2" id="cantidadP2" value="{{old('cantidadP2')}}" class=" border p-3 rounded-lg 
                    @error('cantidadP2') border-red-500 @enderror">
                </div>
                <label for="nombreP"  class="mb-10 uppercase text-gray-500 font-bold">Nombre de pieza</label>
                 
                 <select name="nombreP3" id="nombreP3">
                     <option value="" disabled selected>-- Selecciona --</option>
                     <option value="">X</option>
                     <option value=" ">X</option>
                     <option value=" ">X</option>
                     <option value="">X</option>
                     <option value="">X</option>
                     <option value=" ">X</option>
                     <option value=" ">X</option>
                     <option value="">X</option>
                 </select>
                <div>
                    <label for="cantidadP3" class="mb-10 uppercase text-gray-500 font-bold mr-3">Cantidad</label>
                 
                    <input type="number" name="cantidadP3" id="cantidadP3" value="{{old('cantidadP3')}}" class=" border p-3 rounded-lg 
                    @error('cantidadP3') border-red-500 @enderror">
                </div>
                <label for="nombreP"  class="mb-10 uppercase text-gray-500 font-bold">Nombre de pieza</label>
                 
                 <select name="nombreP4" id="nombreP4">
                     <option value="" disabled selected>-- Selecciona --</option>
                     <option value="">X</option>
                     <option value=" ">X</option>
                     <option value=" ">X</option>
                     <option value="">X</option>
                     <option value="">X</option>
                     <option value=" ">X</option>
                     <option value=" ">X</option>
                     <option value="">X</option>
                 </select>
                 <div>
                    <label for="cantidadP4" class="mb-10 uppercase text-gray-500 font-bold mr-3">Cantidad</label>
                 
                    <input type="number" name="cantidadP4" id="cantidadP4" value="{{old('cantidadP4')}}" class=" border p-3 rounded-lg 
                    @error('cantidadP4') border-red-500 @enderror">
                </div>
        </div>
</div>
       
                
        
<div class="">
    <div class="container columns-4 mb-10 w-30 ml-10" >

      <label for="nombreP5"  class="mb-10 uppercase text-gray-500 font-bold">Nombre de pieza</label>
      
      <select name="nombreP5" id="nombreP5">
          <option value="" disabled selected>-- Selecciona --</option>
          <option value="">X</option>
          <option value=" ">X</option>
          <option value=" ">X</option>
          <option value="">X</option>
          <option value="">X</option>
          <option value=" ">X</option>
          <option value=" ">X</option>
          <option value="">X</option>
      </select>
     <div>
         <label for="cantidadP5" class="mb-10 uppercase text-gray-500 font-bold mr-3">Cantidad</label>
      
         <input type="number" name="cantidadP5" id="cantidadP5" value="{{old('cantidadP5')}}" class=" border p-3 rounded-lg 
         @error('cantidadP5') border-red-500 @enderror">
     </div>
     <label for="nombreP6"  class="mb-10 uppercase text-gray-500 font-bold">Nombre de pieza</label>
      
      <select name="nombreP6" id="nombreP6">
          <option value="" disabled selected>-- Selecciona --</option>
          <option value="">X</option>
          <option value=" ">X</option>
          <option value=" ">X</option>
          <option value="">X</option>
          <option value="">X</option>
          <option value=" ">X</option>
          <option value=" ">X</option>
          <option value="">X</option>
      </select>
     <div>
         <label for="cantidadP6" class="mb-10 uppercase text-gray-500 font-bold mr-3">Cantidad</label>
      
         <input type="number" name="cantidadP6" id="cantidadP6" value="{{old('cantidadP6')}}" class=" border p-3 rounded-lg 
         @error('cantidadP6') border-red-500 @enderror">
     </div>
     <label for="nombreP7"  class="mb-10 uppercase text-gray-500 font-bold">Nombre de pieza</label>
      
      <select name="nombreP7" id="nombreP7">
          <option value="" disabled selected>-- Selecciona --</option>
          <option value="">X</option>
          <option value=" ">X</option>
          <option value=" ">X</option>
          <option value="">X</option>
          <option value="">X</option>
          <option value=" ">X</option>
          <option value=" ">X</option>
          <option value="">X</option>
      </select>
     <div>
         <label for="cantidadP7" class="mb-10 uppercase text-gray-500 font-bold mr-3">Cantidad</label>
      
         <input type="number" name="cantidadP7" id="cantidadP7" value="{{old('cantidadP7')}}" class=" border p-3 rounded-lg 
         @error('cantidadP7') border-red-500 @enderror">
     </div>
     <label for="nombreP8"  class="mb-10 uppercase text-gray-500 font-bold">Nombre de pieza</label>
      
      <select name="nombreP8" id="nombreP8">
          <option value="" disabled selected>-- Selecciona --</option>
          <option value="">X</option>
          <option value=" ">X</option>
          <option value=" ">X</option>
          <option value="">X</option>
          <option value="">X</option>
          <option value=" ">X</option>
          <option value=" ">X</option>
          <option value="">X</option>
      </select>
      <div>
         <label for="cantidadP8" class="mb-10 uppercase text-gray-500 font-bold mr-3">Cantidad</label>
      
         <input type="number" name="cantidadP8" id="cantidadP8" value="{{old('cantidadP8')}}" class=" border p-3 rounded-lg 
         @error('cantidadP8') border-red-500 @enderror">
     </div>
</div>
</div>
<div class="">
    <div class="container columns-4 mb-10 w-30 ml-10" >

      <label for="nombreP9"  class="mb-10 uppercase text-gray-500 font-bold">Nombre de pieza</label>
      
      <select name="nombreP9" id="nombreP9">
          <option value="" disabled selected>-- Selecciona --</option>
          <option value="">X</option>
          <option value=" ">X</option>
          <option value=" ">X</option>
          <option value="">X</option>
          <option value="">X</option>
          <option value=" ">X</option>
          <option value=" ">X</option>
          <option value="">X</option>
      </select>
     <div>
         <label for="cantidadP9" class="mb-10 uppercase text-gray-500 font-bold mr-3">Cantidad</label>
      
         <input type="number" name="cantidadP9" id="cantidadP9" value="{{old('cantidadP9')}}" class=" border p-3 rounded-lg 
         @error('cantidadP9') border-red-500 @enderror">
     </div>
     <label for="nombreP10"  class="mb-10 uppercase text-gray-500 font-bold">Nombre de pieza</label>
      
      <select name="nombreP10" id="nombreP10">
          <option value="" disabled selected>-- Selecciona --</option>
          <option value="">X</option>
          <option value=" ">X</option>
          <option value=" ">X</option>
          <option value="">X</option>
          <option value="">X</option>
          <option value=" ">X</option>
          <option value=" ">X</option>
          <option value="">X</option>
      </select>
     <div>
         <label for="cantidadP10" class="mb-10 uppercase text-gray-500 font-bold mr-3">Cantidad</label>
      
         <input type="number" name="cantidadP10" id="cantidadP10" value="{{old('cantidadP10')}}" class=" border p-3 rounded-lg 
         @error('cantidadP10') border-red-500 @enderror">
     </div>
     <label for="nombreP11"  class="mb-10 uppercase text-gray-500 font-bold">Nombre de pieza</label>
      
      <select name="nombreP11" id="nombreP11">
          <option value="" disabled selected>-- Selecciona --</option>
          <option value="">X</option>
          <option value=" ">X</option>
          <option value=" ">X</option>
          <option value="">X</option>
          <option value="">X</option>
          <option value=" ">X</option>
          <option value=" ">X</option>
          <option value="">X</option>
      </select>
     <div>
         <label for="cantidadP11" class="mb-10 uppercase text-gray-500 font-bold mr-3">Cantidad</label>
      
         <input type="number" name="cantidadP11" id="cantidadP11" value="{{old('cantidadP11')}}" class=" border p-3 rounded-lg 
         @error('cantidadP11') border-red-500 @enderror">
     </div>
     <label for="nombreP12"  class="mb-10 uppercase text-gray-500 font-bold">Nombre de pieza</label>
      
      <select name="nombreP12" id="nombreP12">
          <option value="" disabled selected>-- Selecciona --</option>
          <option value="">X</option>
          <option value=" ">X</option>
          <option value=" ">X</option>
          <option value="">X</option>
          <option value="">X</option>
          <option value=" ">X</option>
          <option value=" ">X</option>
          <option value="">X</option>
      </select>
      <div>
         <label for="cantidadP12" class="mb-10 uppercase text-gray-500 font-bold mr-3">Cantidad</label>
      
         <input type="number" name="cantidadP12" id="cantidadP12" value="{{old('cantidadP12')}}" class=" border p-3 rounded-lg 
         @error('cantidadP12') border-red-500 @enderror">
     </div>
</div>
</div>




               

            
            <div class="mb-5">
                <label for="observaciones" class="mb-2 block uppercase text-gray-500 font-bold">Observaciones</label>
                <textarea name="observaciones" id="observaciones" value="{{old('observaciones')}}" cols="30" rows="10" class="mb-2 block text-black-300 border p-3 w-full rounded-lg"></textarea>
                
                
            </div>
            <div class="mb-5">
                <label for="detalles" class="mb-2 block uppercase text-gray-500 font-bold">Detalles o problemas</label>
                <textarea name="detalles" id="detalles" value="{{old('detalles')}}" cols="30" rows="10" class="mb-2 block text-black-300 border p-3 w-full rounded-lg"></textarea>
                
                
            </div>

    

            <input type="submit" name="" value="Crear" class="bg-sky-600
                 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg" id="">
    
        </form>
                </div>
    
</div>

@endsection