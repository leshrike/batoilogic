@extends('plantilla')
@section('titulo')
    
@endsection
@section('contenido')

    <div class="container my-8 mx-auto px-4 md:px-12">

    <h1 class="text-3xl font-bold">Crear producto</h1>
    
    <form action="{{ route('order.store') }}" method="POST">
    @csrf
    @method('POST')
        
        <!-- Formulario Nombre -->
        <div class="mt-4">

            <label class="block text-gray-700 inline-flex">Destinatario:</label>

            <input name="name" id="name" class="form-input mt-1 block w-full" placeholder="Nombre del destinatario" type="text"></input>
    
        </div>

        <input type="submit" class="object-left bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">
    
    </form>

</div>