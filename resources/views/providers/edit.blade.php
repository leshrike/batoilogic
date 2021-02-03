@extends('plantilla')
@section('titulo')
    Editar un proveedor
@endsection
@section('contenido')

    <div class="container my-8 mx-auto px-4 md:px-12">
    <h1 class="text-3xl font-bold">Editar un proveedor</h1>
    <form action="/proveedores/{{ $provider->id }}/update" method="PUT">
    @csrf
    @method('PUT')
        
        <!-- Formulario Nombre -->
        <div class="mt-4">

            <label class="block text-gray-700 inline-flex">Nombre del proveedor</label>

            <input id="name" name="name" class="form-input mt-1 block w-full" value="{{ old('name') }}" type="text"></input>
    
        </div>
        
        <!-- Formulario email -->

        <div class="mt-4">

            <label class="inline-flex text-gray-700">Email</label>

           <input id="email" name="email" class="form-input mt-1 block w-full" type="email" placeholder="ejemplo@ejemplo.com" value="{{ old('email') }}"></input>

        </div>

        <!-- Formulario Precio -->

        <div class="mt-4">

            <label class="block inline-flex text-gray-700">Telefono de contacto</label>

            <input name="phone" id="phone" type="number" value="{{ old('phone') }}"></input>

        </div>

        <!-- Formulario logo -->

        <div class="block mt-4">

            <label class="text-grey-700">Imagen del proveedor</label>
            
            <!-- Botón para añadir imagen -->

            <input type="file" name="logo" id="logo" class="custom-file-input">

        </div>
        <input type="submit" class="object-left bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">
</div>

@endsection