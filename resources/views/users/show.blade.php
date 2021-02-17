@extends('plantilla')
@section('titulo')
    {{ $user->id }}
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
    
    <!-- Codigo que se ejecuta si el usuario autenticado accede a su perfil -->

 
@endsection