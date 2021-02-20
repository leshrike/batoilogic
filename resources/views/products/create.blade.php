@extends('plantilla')
@section('titulo')
    
@endsection
@section('contenido')

    <div class="container my-8 mx-auto px-4 md:px-12">

    <h1 class="text-3xl font-bold">Crear producto</h1>
    
    <form action="{{ route('product.store') }}" method="POST">
    @csrf
    @method('POST')
        
        <!-- Formulario Nombre -->
        <div class="mt-4">

            <label for="name" class="block text-gray-700 inline-flex">Nombre del producto</label>

            <input name="name" id="name" class="form-input mt-1 block w-full" placeholder="nombre de producto" type="text"></input>
    
        </div>
        
        <!-- Formulario Descripcion -->

        <div class="mt-4">

            <label for="description" class="inline-flex text-gray-700">Descripcion del producto</label>

            <textarea id="description" name="description" rows="10" cols="100">{{ old("description") }}</textarea>

        </div>

        <!-- Formulario Precio -->

        <div class="mt-4">

            <label for="price" class="block inline-flex text-gray-700">Precio del producto:</label>

            <input id="price" name="price" class="" type="number"></input>

        </div>

        <!-- Formulario Stock -->
        <div class="mt-4">

            <label for="number" id="stock" name="stock" class="block inline-flex text-gray-700">Stock:</label>

            <input class="" type="number"></input>

        </div>

        <!-- Formulario Available -->
        <div class="mt-4">

            <label for="active" class="text-gray-700 inline-flex">¿Está disponible?</label>

            <div class="mt-2">
                <input type="radio" class="form-radio" name="active" value="1">
                <span class="ml-2"> Disponible </span>
            </div>

            <div class="mt-2">
                <input type="radio" class="form-radio" name="active" value="0">
                <span class="ml-2"> No disponible </span>
            </div>

        </div>
        
        <!-- Formulario Proveedores -->
        
        <div class="block mt-4">

            <label for="id_provider" class="text-gray-700">Proveedores:</label>

            <select name="id_provider" id="id_provider" class="form-select mt-1 block w-full">
            
                    <option>---Selecciona un proveedor---</option>
                @forelse($proveedores as $proveedor)
                    <option value="{{$proveedor->id}}">{{ $proveedor->name }}</option>
                @empty
                @endforelse
            
            </select>

        </div>

        <!-- Formulario photo -->

        <div class="block mt-4">

            <label for="photo" id="chooseFile" class="text-grey-700">Selecciona una imagen para el producto</label>
            
            <!-- Botón para añadir imagen -->

            <input type="file" name="photo" id="photo" class="custom-file-input">

        </div>
        
        <input type="submit" class="object-left bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">
</div>