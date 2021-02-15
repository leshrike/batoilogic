@extends('plantilla')
@section('titulo')
    Actualizar stock
@endsection
@section('contenido')

    <div class="container my-8 mx-auto px-4 md:px-12">
    <h1 class="text-3xl font-bold">Actualizar el stock del proveedor {{ $provider->name }}</h1>
    <form action="/proveedores/{{ $provider->id }}/stockageUpdate" method="POST">
    @csrf
    @method('PUT')

        <!-- Formulario de añadir stock mediante JSON-->

        <div class="block mt-4">

            <label class="text-grey-700">Introduce el fichero de productos, en formato JSON:</label>
            
            <!-- Botón para añadir el fichero -->

            <input type="file" name="stock_file" id="stock_file" class="custom-file-input">

        </div>
        <input type="submit" class="object-left bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">
</div>

@endsection