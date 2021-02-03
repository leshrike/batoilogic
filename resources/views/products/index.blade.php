<?php
use App\Models\product;
use App\Models\provider;
?>
@extends('plantilla')
@section('titulo')
    Productos
@endsection

@section('contenido')

    <div class="container my-12 mx-auto px-4 md:px-12">
        <div class="flex flex-wrap -mx-1 lg:-mx-4">
            @forelse($products as $product)
                
                <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                    <article class="overflow-hidden rounded-lg shadow-lg">
                        <a href="/productos/{{ $product->id }}">
                            <img alt="{{ $product->name }}" class="block h-auto w-full" src="{{ $product->photo }}">
                        </a>
                        <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                            <h1 class="text-lg"> 
                                <a class="no-undeline text-black" href="/product/{{ $product->id }}">{{ $product->name }}</a>
                            </h1>
                            <p class="text-grey-darker text-sm">{{ $product->price }} €</p>
                        </header>
                        <?php $proveedor = provider::find($product->provider_id);?>
                        <footer class="flex items-center justify-between leading-none p-2 md:p4">
                            <a class="flex items-center no-underline text black" href="#">
                                <!-- <img  alt="{{ $proveedor->name }}" src="{{ $proveedor->logo }}"/>  -->
                                <p class="ml-2 text-xs">{{ $proveedor->name }}</p>
                            </a>
                        </footer>
                    </article>
                </div>
            @empty
                <p>No se han encontrado productos</p>
            @endforelse

        </div>
    </div>
@endsection

