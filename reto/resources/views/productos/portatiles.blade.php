@extends('layouts.base')


@section('css')

<link rel="stylesheet" href="{{ asset('css/productos.css') }}">

@endsection



@section('contenido')


<h1 class="titulo">PORTÁTILES</h1>


<section class="contenedor-productos">


<div class="producto">

<img src="{{ asset('imagenes/productos/hp255g10.png') }}">

<div class="nombre-producto">

Notebook HP 255 G10

<br>

Ryzen 5 7520U

<br>

RAM 16GB

<br>

SSD 512GB

</div>


</div>

<div class="producto">

<img src="{{ asset('imagenes/productos/hp250g9.png') }}">


<div class="nombre-producto">

Notebook HP 250 G9

<br>

Intel Core i3

<br>

RAM 8GB

<br>

SSD 512GB

</div>


</div>




<div class="producto">
<img src="{{ asset('imagenes/productos/hpvictus15.png') }}">
<div class="nombre-producto">
HP Victus 15
<br>
Ryzen 5 7535HS
<br>
RAM 8GB DDR5
<br>
SSD 512GB
</div>
</div>

<div class="producto">
<img src="{{ asset('imagenes/productos/dell15.png') }}">
<div class="nombre-producto">
Dell Inspiron 15
<br>
Core i5
<br>
RAM 8GB 
<br>
SSD 256GB
</div>
</div>

<div class="producto">
<img src="{{ asset('imagenes/productos/asus15.png') }}">
<div class="nombre-producto">
ASUS VivoBook 15
<br>
Intel Core i5
<br>
RAM 8GB
<br>
SSD 512GB

</div>
</div>


</section>



@endsection