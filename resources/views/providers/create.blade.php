@extends('plantilla')
@section('titulo')
    
@endsection
@section('contenido')

   
    
    <div class="container my-8 mx-auto px-4 md:px-12">

    <h1 class="text-3xl font-bold">Añadir un proveedor</h1>
    
    <form action="{{ route('provider.store') }}" method="POST">
    @csrf
    @method('POST')
        
        <!-- Formulario Nombre -->
        <div class="mt-4">

            <label class="block text-gray-700 inline-flex">Nombre del proveedor</label>

            <input id="name" name="name" class="form-input mt-1 block w-full" placeholder="nombre de proveedor" type="text"></input>
    
        </div>
        
        <!-- Formulario Descripcion -->

        <div class="mt-4">

            <label class="inline-flex text-gray-700">Email</label>

           <input id="email" name="email" class="form-input mt-1 block w-full" type="email" placeholder="ejemplo@ejemplo.com"></input>

        </div>

        <!-- Formulario Precio -->

        <div class="mt-4">

            <label class="block inline-flex text-gray-700">Telefono de contacto</label>

            <input id="phone" name="phone" class="number" type="text"></input>

        </div>

        <!-- Formulario photo -->

        <div class="block mt-4">

            <label class="text-grey-700">Imagen del proveedor</label>
            <!-- Botón para añadir imagen -->
            <input type="file" name="logo" id="logo" class="custom-file-input">

        </div>
        <input type="submit" class="object-left bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">
</div>