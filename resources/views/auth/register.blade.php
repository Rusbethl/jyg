@extends('layouts.app')

@section('titulo')
    REGISTRATE EN J y G
@endsection


@section('contenido')

    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{asset('img/six.jpg')}}" alt="">
        </div> 

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow">
            <form action="{{route('register')}}" method="POST">
                @csrf
                <div class="mb-5">   
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>

                    <input type="text" name="name" id="name" placeholder="Tu nombre" value="{{old('name')}}" class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror">
                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>



                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">Username</label>

                    <input type="text" name="username" id="username" placeholder="Tu nombre de Usuario" value="{{old('username')}}" class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror">
                    @error('username')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror

                </div> 
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Email</label>

                    <input type="email" name="email" id="email" placeholder="Tu cemail de registro"value="{{old('email')}}" class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror">
                    @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror

                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Password</label>

                    <input type="password" name="password" id="password" placeholder="Tu contraseña" class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror">
                    @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
                </div>
                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Repetir password</label>

                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repite tu contraseña" class="border p-3 w-full rounded-lg">

                </div>

                <input type="submit" name="" value="Crear cuenta" class="bg-sky-600
                 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg" id="">
            </form>
        </div>

    </div>

@endsection

