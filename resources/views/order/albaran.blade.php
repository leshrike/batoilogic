<div class="flex-flex-col">
<div class="container mx-auto">

    <div class="flex-flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200 table-auto border-collapse">
            <thead class="bg-gray-50">
                <tr>
                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Cliente
                </th>
                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Repartidor
                </th>
                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Estado
                </th>
                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Acciones
                </th>
                </tr>
            </thead>

            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($orders as $order)
                <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                    <div class="flex-shrink-0 h-10 w-10">
                        <img class="h-10 w-10 rounded-full" src="https://via.placeholder.com/20" alt="imagen de perfil del cliente">
                    </div>
                    <div class="ml-4">
                        <div class="text-sm font-medium text-gray-900">
                    
                        <?php
                            $id = $order->client_id;
                            $cliente = App\Models\User::find($id)->name;
                        ?>
                    
                            {{ $cliente }}
                        </div>
                    
                        <div class="text-sm text-center text-gray-500">
                            <?php
                            $id = $order->client_id;
                            $direccion = App\Models\address::firstWhere('user_id',$id);
                        ?>
                            
                        </div>
                    </div>
                    </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-center text-gray-900">
                    <?php
                        $id = $order->dealer_id;
                        $repartidor = App\Models\User::find($id)->name;     
                    ?>
                        {{ $repartidor }}
                    </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold">
                    <?php
                        $id = $order->state_id;
                        $estado = App\Models\state::find($id)->text;
                    ?>
                    {{ $estado }}
                    </span>
                </td>
                
                <td class="px-6 py-4 whitespace-nowrap">
                    <a href="/pedidos/{{ $order->id }}" class="text-indigo-600 hover:indigo-900">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                        </a>
                </td>
                @if(auth()->user()->rol === 'admin' )
                <td class="px-6 py-4 whitespace-nowrap">
                    <a href="/pedidos/{{ $order->id }}/editar" class="text-indigo-600 hover:text-indigo-900">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                        </svg>
                    </a> 
                </td>

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
                @endforelse
            </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>
</div>
</div>