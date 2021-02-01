@extends('plantilla')
@section('titulo')
    
@endsection
@section('contenido')

   
    
    <div class="container my-8 mx-auto px-4 md:px-12">

    <h1 class="text-3xl font-bold">Editar el producto {{ $product->id }}</h1>
    
    <form action="/productos/{{ $product->id }}/update">
    @csrf
    @method('PUT')
        
        <!-- Formulario Nombre -->
        <div class="mt-4">

            <label class="block text-gray-700 inline-flex">Nombre del producto</label>

            <input class="form-input mt-1 block w-full" value="{{ old('name') }}" type="text"></input>
    
        </div>
        
        <!-- Formulario Descripcion -->

        <div class="mt-4">

            <label class="inline-flex text-gray-700">Descripcion del producto</label>

            <textarea rows="10" cols="100">{{ old("description") }}</textarea>

        </div>

        <!-- Formulario Precio -->

        <div class="mt-4">

            <label class="block inline-flex text-gray-700">Precio del producto:</label>

            <input class="" type="text" value="{{ old('price') }}"></input>

        </div>

        <!-- Formulario Stock -->
        <div class="mt-4">

            <label class="block inline-flex text-gray-700">Stock:</label>

            <input class="" type="number" value="{{ old('stock') }}"></input>

        </div>

        <!-- Formulario Available -->
        <div class="mt-4">

            <label class="text-gray-700 inline-flex">¿Está disponible?</label>

            <div class="mt-2">
                <input type="radio" class="form-radio" name="activo" value="1">
                <span class="ml-2"> Disponible </span>
            </div>

            <div class="mt-2">
                <input type="radio" class="form-radio" name="activo" value="0">
                <span class="ml-2"> No disponible </span>
            </div>

        </div>
        
        <!-- Formulario Proveedores -->
        
        <div class="block mt-4">

            <label class="text-gray-700">Proveedores:</label>

            <select class="form-select mt-1 block w-full">
            
                    <option>---Selecciona un proveedor---</option>
                @forelse($proveedores as $proveedor)
                    <option value="{{$proveedor->id}}">{{ $proveedor->name }}</option>
                @empty
                @endforelse
            
            </select>

        </div>

        <!-- Formulario photo -->

        <div class="block mt-4">

            <label class="text-grey-700">Imagen del producto</label>
            <!-- Botón para añadir imagen -->

        </div>
        <input type="submit" class="object-left bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">
</div>