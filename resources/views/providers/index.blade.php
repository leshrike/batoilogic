@extends('plantilla')
@section('titulo')
    Proveedores
@endsection

@section('contentido')

    <div class="container my-12 mx-auto px-4 md:px-12">
        <div class="flex flex-wrap -mx-1 lg:-mx-4">
            @forelse($providers as $provider)
                <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                    <article class="overflow-hidden rounded-lg shadow-lg">
                        <a href="/proveedores/{{ $provider->id }}">
                            <img alt="{{ $provider->name }}" class="block h-auto w-full" src="{{ $provider->photo }}">
                        </a>
                        <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                            <h1 class="text-lg"> 
                                <a class="no-undeline text-black" href="/proveedores/{{ $provider->id }}">{{ $provider->name }}</a>
                            </h1>
                            <p class="text-grey-darker text-sm">{{ $provider->phone }} €</p>
                            <p class="text-grey-darker text-sm">{{ $provider->email }} €</p>
                        </header>
                    </article>
                </div>
            @empty
                <p>No se han encontrado proveedores</p>
            @endforelse
        </div>
    </div>
    
@endsection