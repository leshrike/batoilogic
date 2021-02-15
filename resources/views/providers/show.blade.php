@extends('plantilla')
@section('titulo')
    Ficha del proveedor {{ $provider->name }}
@endsection
@section('contenido')
    <div class="container my-12 mx-auto px-4 md:px-12">
        <div class="flex flex-wrap -mx-1 lg:-mx-4">
            <!-- Imagen del proveedor -->
            <div class="my-1 px-2 w-full md:w-1/2 lg:px-3 lg:w-1/3">
                <img alt="{{ $provider->name }}" src="/storage/{{ $provider->logo }}" name="provider_photo" >
            </div>
            <!-- Campos varios del proveedor -->
            <div class="my-1 px-2 w-full md:w-1/2 lg:px-3 lg:w-1/3">
                <p class="text-3xl text-bold">{{ $provider->name }}</p>
                <br>
                <p>Metodos de contacto: </p>
                <p class="text-sm">Correo Electrónico {{ $provider->email }} </p>
                <p class="text-sm">Número de telefono {{ $provider->phone }} </p>
                <br>
                <p class="text-sm"> Características del proveedor:</p>
                    <li class="text-sm"> texto de ejemplo </li>
                    <li class="text-sm"> texto de ejemplo </li>
                    <li class="text-sm"> texto de ejemplo </li>
                    <li class="text-sm"> texto de ejemplo </li>  
            </div>
            <p class="text-xs">{{ $provider->description }}</p>
        </div>
        @if(auth()->user()->role === 'admin')
        <div class="container my-12 mx-auto px-4 md:px-12">
            
            <a class="object-right bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" href="/proveedores/{{$provider->id}}/stocking">
                Actualizar el stock del proveedor
            </a>

            <a class="object-right bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" href="/proveedores/{{$provider->id}}/editar">
                Editar el proveedor 
            </a>          
            <a class="object-left bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" href="/proveedores/{{$provider->id}}/eliminar">
                Eliminar el Proveedor
            </a>
        </div>
        @endif
    </div>

@endsection