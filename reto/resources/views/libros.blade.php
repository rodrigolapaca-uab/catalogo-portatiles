@extends('layouts.base')

@section('content')

    <p>
        Librería El Lápiz ofrece libros para todos sus lectores, con un catálogo
        sencillo y actualizado.
    </p>

    <p>
        Hay {{ count($libros) }} libros en el catálogo.
    </p>

    @foreach ($libros as $libro)
        <p>
            {{ $libro->titulo }} - {{ $libro->precio }} Bs
        </p>
    @endforeach

    <p>
        Catálogo atendido por Ervin Rodrigo Lapaca Aima
    </p>

    <a href="/libros/nuevo">Registrar nuevo libro</a>

@endsection