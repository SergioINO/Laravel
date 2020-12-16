@extends('plantilla.plantilla')
@section('title')
    {{-- AQUI EL TITULO --}}
    Inicio
@endsection
@section('css')
    {{-- AQUI DEBERIAN IR TODO EL CSS QUE OCUPARE EN ESTA PLANTILLA --}}
    {{-- SIN REPETIR LAS QUE YA ESTAN EN MI PLANTILLA --}}

@endsection
@section('contenido')
    {{-- AQUI DEBE IR EL CONTENIDO DE MI PAGINA --}}
    <center>
    Bienvenido a mi App
    </center>

    <a href="/plantilla/mostrar" class="btn btn-primary">Ver Mis Peliculas</a>   
@endsection

@section('js')
     {{-- AQUI DEBERIAN IR TODO EL JS QUE OCUPARE EN ESTA PLANTILLA --}}
    {{-- SIN REPETIR LAS QUE YA ESTAN EN MI PLANTILLA --}}
    
@endsection