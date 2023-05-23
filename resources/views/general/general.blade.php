@extends('layouts.app')
@push('jquery')
<script src="https://code.jquery.com/jquery-3.2.1.js" type="text/javascript"></script>
@endpush

@section('titulo')
- Afiliados - General
@endsection
        
@section('contenido')
        <div class="w-5/6 h-screen p-3 pt-5 flex flex-col gap-y-1 bg-gray-300">
            <div class="text-2xl flex items-center justify-center font-bold text-gray-700">
                General
            </div>

            <div class="shadow-inner rounded p-2 bg-gray-100 flex gap-8 items-center">
                <div class="flex gap-2">

                    <!-- BUSCAR -->
                    <div>
                        <!-- boton -->
                        <button data-modal-target="search-modal" data-modal-toggle="search-modal" class="border rounded p-1 px-2 text-white font-medium bg-blue-600 hover:bg-blue-700" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                              
                        </button>
                        
                        <!-- main -->
                        <div id="search-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-md max-h-full">
                                <!-- contenido -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="search-modal">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="px-6 py-6 lg:px-8">
                                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Buscar un afiliado</h3>
    
                                        <form class="space-y-6" action="{{route('find')}}" method="POST">                                            
                                            @csrf
                                            <div class="flex gap-3">
                                                <label for="cod_persona" class="my-auto text-sm font-medium text-gray-900 dark:text-white">Codigo de afiliado</label>
                                                <input type="text" name="cod_persona" id="cod_persona" class="h-6 bg-gray-50 border border-gray-300 text-gray-900 text-sm text-right rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-16 px-1 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Codigo" >
                                            </div>
                                            <div class="flex gap-3">
                                                <label for="dni_persona" class="my-auto text-sm font-medium text-gray-900 dark:text-white">DNI</label>
                                                <input type="text" name="dni_persona" id="dni_persona" placeholder="DNI" class="h-6 bg-gray-50 border border-gray-300 text-gray-900 text-sm text-right rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-24 px-1 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                            </div>                                                
                                           
                                            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Buscar</button>
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
    
                    <!-- MODIFICAR -->
                    <div>
                        <!-- boton -->
                        <button name="modificar" id="modificar" class="border rounded p-1 px-2 text-white font-medium bg-blue-600 hover:bg-blue-700" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                            </svg>                              
                        </button>                           
                    </div>
    
                    <!-- NUEVO -->
                    <div>
                        <!-- boton -->
                        <button name="nuevo" id="nuevo" class="border rounded p-1 px-2 text-white font-medium bg-blue-600 hover:bg-blue-700" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                              
                        </button>                           
                    </div>
    
                    <!-- ELIMINAR -->
                    <div>
                        <!-- boton -->
                        <button data-modal-target="delete-modal" data-modal-toggle="delete-modal" class="border rounded p-1 px-2 text-white font-medium bg-red-600 hover:bg-red-700" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                              
                        </button>
                        
                        <div id="delete-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-md max-h-full">
                                <!-- contenido -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="delete-modal">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
    
                                    <div class="px-6 py-6 lg:px-8">
                                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Eliminar un afiliado</h3>
    
                                        <form class="space-y-6" action="{{route('delete')}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <div class="flex gap-3">
                                                <label for="cod_persona" class="my-auto text-sm font-medium text-gray-900 dark:text-white">Codigo de afiliado</label>
                                                <input type="text" name="cod_persona" id="cod_persona" class="h-6 bg-gray-50 border border-gray-300 text-gray-900 text-sm text-right rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-16 px-1 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Codigo" >
                                            </div>                                                              
                                           
                                            <button type="submit" class="w-full text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Eliminar</button>
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> 
                                                 
                    </div>
                </div>

                @if (session('mensaje'))
                    <p id="mensaje" class="bg-green-600 text-white rounded-lg text-sm p-1 text-center">{{session('mensaje')}}</p>                                                       
                @endif
                @error('cod_persona')
                    <p id="mensaje" class="bg-red-600 text-white  rounded-xl text-sm p-1 text-center">{{ $message }}</p>
                @enderror
                @error('dni_persona')
                    <p id="mensaje" class="bg-red-600 text-white  rounded-xl text-sm p-1 text-center">{{ $message }}</p>
                @enderror                 

            </div>
            <div class="shadow-inner rounded p-2 bg-gray-100 h-full">
                <div class="bg-gray-200 h-full">               
                    <div class="flex flex-row p-1 bg-gray-300 gap-3 rounded-t">
                        <div class=" w-10">
                            Cod
                        </div>
                        <div class=" w-52">
                            Nombre y Apellidos
                        </div>
                        <div class=" w-20">
                            Dni
                        </div>
                        <div class=" w-20">
                            Telefono
                        </div>
                        <div class=" w-24">
                            F. Nac
                        </div>
                        <div class=" w-14 text-center">
                            Menor
                        </div>
                        <div class=" w-24">
                            F. Alta
                        </div>
                        <div class="w-8 text-center">
                            Baja
                        </div>
                        <div>
                            Email
                        </div>
                    </div>
                
                    @foreach ($personas as $persona)
                    <form action="{{route('find')}}" method="POST">
                    @csrf
                    <input type="text" class="w-10 bg-transparent cursor-pointer" name="cod" id="cod" value="{{$persona->Cod_Personas}}" hidden>
                    <input type="text" class="w-52 bg-transparent cursor-pointer" name="nom" id="nom" value="{{$persona->Nomb_Personas}} {{$persona->Apel_Personas}}" hidden>
                    
                        <button class="flex bg-gray-200 px-1 gap-3 w-full hover:border hover:bg-white hover:border-black" type="submit">
                            <div class="w-10">
                                {{$persona->Cod_Personas}}                    
                            </div>
                            <div class="w-52 text-left">
                                {{$persona->Nomb_Personas}} {{$persona->Apel_Personas}}
                            </div>
                            <div class="w-20">
                                {{$persona->Dni_Personas}}
                            </div>
                            <div class="w-20">
                                {{$persona->Tfn1_Personas}}                       
                            </div>
                            <div class="w-24">
                                {{$persona->FNac_Personas}}
                            </div>
                            <div class="w-14 text-center">
                                @if (now()->year - intval(substr($persona->FNac_Personas, 0,4)) >=18)
                                    Si
                                @else
                                    No    
                                @endif
                            </div>                    
                            <div class="w-24">
                                {{$persona->FAlt_Personas}}
                            </div>
                            <div class="w-8 text-center">
                                @if ($persona->Desc_Personas == 'on')
                                    Si
                                @else
                                    No    
                                @endif                        
                            </div>                    
                            <div class="">
                                {{$persona->Emai_Personas}}
                            </div>
                        </button>
                    </form>
                    @endforeach
                </div>
            </div>    
            
        </div>
    
    <script type="text/javascript">
        var message = @if (isset($message))$message @endif;        
    </script>
@endsection