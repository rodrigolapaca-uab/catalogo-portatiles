@extends('layouts.base')


@section('css')

<link rel="stylesheet" href="{{ asset('css/productos.css') }}">

@endsection



@section('contenido')


<h1 class="titulo">
PC DE ESCRITORIO
</h1>



<section class="contenedor-productos">


<div class="producto">


<img src="{{ asset('imagenes/productos/lenovoaio.png') }}">



<div class="nombre-producto">


PC DE ESCRITORIO

<br>

LENOVO IdeaCentre AIO

<br>

Intel Core i7

<br>

16GB RAM

<br>

512GB SSD


</div>


</div>



<div class="producto">


<img src="{{ asset('imagenes/productos/lenovoaio2.png') }}">



<div class="nombre-producto">


PC DE ESCRITORIO

<br>

LENOVO AIO IdeaCentre

<br>

Intel G6400T

<br>

8GB RAM

<br>

256GB SSD


</div>


</div>



</section>



@endsection