<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="utf-8">    
    @stack('js')    
    @vite('resources/css/app.css')           
    <title>SIA @yield('titulo')</title>
</head>

<body class="bg-gray-900">
    <header>
        <div class="flex  bg-gray-900">
            <div class="text-5xl font-black w-1/6 p-2 text-center text-white">
                <h1><a href="{{route('index')}}">SIA</a></h1>
            </div>
            <div class="w-4/6">

            </div>
            <div class="w-1/6 flex gap-3 items-center">
                <div class="text-white ">
                    user
                </div>
                <div class="text-white ">
                    cerrar sesion
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="flex">
            <div class="w-1/6 p-1 bg-gray-900">
                <nav class="flex flex-col gap-y-1 pt-4">
                                      
                    <button id="dropdownHoverAfiliados" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="text-lg bg-white border-2 p-1 text-center font-semibold rounded-md  hover:bg-slate-300 hover:border-white hover:scale-105 hover:shadow-xl" type="button">Afiliados</button>
                    <!-- Dropdown menu -->
                    
                        <ul id="dropdownHover" class=" text-md text-black z-10 w-48 hidden bg-transparent divide-y divide-gray-500 shadow" aria-labelledby="dropdownHoverAfiliados">
                            <li class="border border-black rounded bg-zinc-100">
                                <a href="{{route('general')}}" class="block px-4 py-2 hover:bg-gray-200">General</a>
                            </li>
                            <li class="border border-black rounded bg-zinc-100">
                                <a href="{{route('socios')}}" class="block px-4 py-2 hover:bg-gray-200">Socio</a>
                            </li>
                            <li class="border border-black rounded bg-zinc-100">
                                <a href="#" class="block px-4 py-2 hover:bg-gray-200">Deportista</a>
                            </li>
                            <li class="border border-black rounded bg-zinc-100">
                                <a href="#" class="block px-4 py-2 hover:bg-gray-200">Tecnicos</a>
                            </li>
                        </ul>
                    

                    <a class="text-lg bg-white border-2 p-1 text-center font-semibold rounded-md  hover:bg-slate-300 hover:border-white hover:scale-105 hover:shadow-xl"" href="#">
                        Federaciones
                    </a>
                    <a class="text-lg bg-white border-2 p-1 text-center font-semibold rounded-md  hover:bg-slate-300 hover:border-white hover:scale-105 hover:shadow-xl"" href="#">
                        Clubes
                    </a>
                    <a class="text-lg bg-white border-2 p-1 text-center font-semibold rounded-md  hover:bg-slate-300 hover:border-white hover:scale-105 hover:shadow-xl"" href="#">
                        Deportes
                    </a>
                    <a class="text-lg bg-white border-2 p-1 text-center font-semibold rounded-md  hover:bg-slate-300 hover:border-white hover:scale-105 hover:shadow-xl"" href="#">
                        Temporadas
                    </a>               
                </nav>
            </div>
            <div class="w-full">  
            @yield('contenido')
            </div>   
        </div>
        
    </main>

    <footer class="text-center p-2 text-white font-bold uppercase  bg-black">
        SIA - Todos los derechos reservados {{now()->year}}       
    </footer>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>        
</body>
</html>