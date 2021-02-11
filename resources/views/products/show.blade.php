@extends('plantilla')
@section('titulo')
    Ficha del producto {{ $product->name }}
@endsection
@section('contenido')
    <div class="container my-12 mx-auto px-4 md:px-12">
        <div class="flex flex-wrap -mx-1 lg:-mx-4">
            <!-- Imagen del producto -->
            <div class="my-1 px-2 w-full md:w-1/2 lg:px-3 lg:w-1/3">
                <img alt="{{ $product->name }}" src="/storage/{{ $product->photo }}" name="product_photo" >
            </div>
            <!-- Campos varios del producto -->
            <div class="my-1 px-2 w-full md:w-1/2 lg:px-3 lg:w-1/3">
                <p class="text-3xl text-bold">{{ $product->name }}</p>
                <br>  
                <p class="text-xl">¡ Hay disponibles {{$product->stock}} unidades !</p>
                <p clasS="text-sm"> Envío de 2 a 4 días laborales.</p>
                <br>
                <p class="text-sm">Por <a href="/proveedores/{{$proveedor->id}}" class="text-blue-400">{{ $proveedor->name }}</a></p>
                <p class="text-sm">Precio final del producto: {{ $product->price }} €</p>
                <br>
                <p class="text-sm"> Características del producto:</p>
                    <li class="text-sm"> texto de ejemplo </li>
                    <li class="text-sm"> texto de ejemplo </li>
                    <li class="text-sm"> texto de ejemplo </li>
                    <li class="text-sm"> texto de ejemplo </li>  
            </div>
            <p class="text-xs">{{ $product->description }}</p>
        </div>
        <div class="container my-12 mx-auto px-4 md:px-12">
            <a class="object-right bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" href="/productos/{{$product->id}}/editar">
                Editar el producto 
            </a>          
            <a class="object-left bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" href="/productos/{{$product->id}}/eliminar">Eliminar el Producto</a>
        </div>
    </div>
    
@endsection