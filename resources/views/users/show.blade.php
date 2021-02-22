@extends('plantilla')
@section('titulo')
    Perfil de {{ $user->name }}
@endsection

@section('contenido')
<?php

    $propietario = $user->id;
    $sesion = auth()->user()->id;

?>
@if($propietario != $sesion)}{
    
    <!-- Redireccion forzada al home  -->
}
@endif
    
<div class="">
    <div class='flex max-w-xl my-10 bg-white shadow-md rounded-lg overflow-hidden mx-auto'>
        <div class='flex items-center w-full'>
            <div class='w-full'>
                <div class="flex flex-row mt-2 px-2 py-3 mx-3">
                    <div class="w-auto h-auto rounded-full border-2 border-pink-500">
                        <img class='w-12 h-12 object-cover rounded-full shadow cursor-pointer' alt='User avatar' src='{{$user->profile_photo_url}}'>
                    </div>
                    <div class="flex flex-col mb-2 ml-4 mt-1">
                        <div class='text-gray-600 text-sm font-semibold'>{{ $user->role }}</div>
                        <div class='flex w-full mt-1'>
                            <div class='text-blue-700 font-base text-xs mr-1'>
                                {{ $user->role }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-b border-gray-100"></div> 
                <div class='text-gray-600 font-semibold text-lg mb-2 mx-3 px-2'>{{ $user->email }}</div>
                <?php

                    function checkAddress($user){

                        $address="Este usuario no tiene asignada una dirección"; 

                        if ($user->address == null ){

                            return $address;

                        }else{

                            $address = $user->address;

                            return $address;

                        }
                    }

                ?>
                <div class='text-gray-500 font-thin text-sm mb-6 mx-3 px-2'>{{ checkAddress($user) }}</div>
                <div class="flex justify-start mb-4 border-t border-gray-100">
                </div>
            </div>
        </div>
    </div>
</div>

 
@endsection