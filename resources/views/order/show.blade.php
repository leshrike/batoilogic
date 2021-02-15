@extends('plantilla')

@section('titulo')
    Ver pedido {{ $order->id }}
@endsection

@section('contenido')

<div class="flex-flex-col">
<div class="container mx-auto">

    <h1> Detalles del pedido: </h1>
    
    <article class="overflow-hidden rounded-lg shadow-lg">

                <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                    <h1 class="text-lg">
                        <?php
                            $user = $order->client;
                            ?>
                            Destinatario: {{ $user->name }}
                    </h1>
                    <p class="text-grey-darker text-sm">
                        Fecha de llegada estimada: {{ $order->delivery_date }}
                    </p>
                </header>

                <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                        <img alt="imagen del cliente" class="block rounded-full" src="https://via.placeholder.com/20">
                        <p class="ml-2 text-sm">
                            <?php
                                $repartidor = $order->dealer;
                                ?>
                             Repartido por: {{ $repartidor->name }}
                        </p>
                    <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                        <span class="hidden">Like</span>
                        <i class="fa fa-heart"></i>
                    </a>
                </footer>
            </article>
            <div class="">
                <p>Productos del pedido:</p>
            </div>

    <div class="flex-flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200 table-auto border-collapse">
            <thead class="bg-gray-50">
                <tr>
                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Item
                </th>
                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Cantidad
                </th>
                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Acciones
                </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($orderlines as $orderline)
                <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                    <div class="flex-shrink-0 h-10 w-10">
                        <img class="h-10 w-10 rounded-full" src="https://via.placeholder.com/20" alt="imagen de perfil del cliente">
                    </div>
                    <div class="ml-4">
                        <div class="text-sm font-medium text-gray-900">
                    <!-- OBTIENE EL NOMBRE DEL PRODUCTO QUE SEA IGUAL QUE LA ID DE PRODUCTO DADA -->
                        <?php
                            $producto = $orderline->product;
                        ?>
                            {{ $producto->name }}
                        </div>
                    </div>
                    </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-center text-gray-900">
                        {{ $orderline->quantity }}  
                    </div>
                </td>
                @if(auth()->user()->rol === 'admin') <!--En caso de que seamos admin, podremos eliminar elementos-->
                <td class="px-6 py-4 whitespace-nowrap">
                    <a href="/pedidos/{{ $order->id }}/eliminar" class="text-indigo-600 hover:indigo-900">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </a>
                </td>
                @endif
            </tr>
                @empty
                <p>Este pedido no tiene lineas de pedido</p>
                @endforelse
            </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>
</div>
</div>
@endsection