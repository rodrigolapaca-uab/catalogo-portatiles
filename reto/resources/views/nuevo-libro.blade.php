@extends('layouts.base')

@section('content')

    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="/libros/nuevo" method="POST">

        @csrf

        <div>
            <label for="titulo">Título del libro</label>
            <input type="text" id="titulo" name="titulo">
        </div>

        <div>
            <label for="precio">Precio en Bs</label>
            <input type="number" id="precio" name="precio">
        </div>

        <button type="submit">Registrar libro</button>

    </form>

@endsection