@includes('plantilla')

@section('contenido')
<x-guest-layout>
    <x-jet-authentication-card>
        <!-- <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot> -->

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{route('user.store')}}">
            @csrf
            @method('PUT')
            <?
                dd('cliente')            
            ?>
            <div class="block mt-4">
                <x-jet-label for="name" value="Nombre" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="rol" value="Elige un tipo de usuario" />
                    <select id="rol" name="rol">
                    
                    <option default> --Selecciona el tipo de usuario-- </option>
                    <option value="user">Cliente</option>
                    <option value="dealer">Repartidor</option>
                
                    </select>
            </div>

            <div class="block mt-4">
            
            </div>

            <div class="flex items-center justify-end mt-4">

                    <input type="submit" class="object-left bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded" value="Enviar">  
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
@endsection