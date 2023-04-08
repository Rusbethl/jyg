<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @stack('styles')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>J y G - @yield('titulo')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="bg-gray-100">

    <header class="p-5 border-b bg-white shadow">
        <div class="container mx-auto flex justify-between items-center">

            <a href="{{route('welcome')}}" class="text-3xl font-black">J y G</a>

            @auth
            

                <nav class="gap-2 items-center">
                    <a class="font-bold  text-gray-600 text-sm" >Hola <span class="font-normal">{{auth()->user()->username}} </span></a>
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                <button type="submit" class="font-bold uppercase text-gray-600 text-sm">Cerrar sesion</button>
              
                </nav>
            
        
            @endauth

            @guest
            <nav>   
                <a class="font-bold uppercase text-gray-600 text-sm" href="{{route('login')}}">Login</a>
                <a class="font-bold uppercase text-gray-600 text-sm" href="{{route('register')}}">Crear cuenta</a>
            </nav>    
            @endguest

           

        </div>
    </header>

    <main class="container mx-auto mt-10"> 
        <h2 class="text-center text-3xl mb-10 font-semibold" >@yield('titulo')</h2>
        @yield('contenido')
    </main>

    

    <footer class="mt-10 text-center p-5 tex-gray-500 font-bold">
        J y G -Todos los derechos reservados 
        {{now ()->year}}

    </footer>

    
</body>
</html>