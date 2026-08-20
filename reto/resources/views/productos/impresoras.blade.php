@extends('layouts.base')


@section('css')

<link rel="stylesheet" href="{{ asset('css/productos.css') }}">

@endsection



@section('contenido')


<h1 class="titulo">
IMPRESORAS
</h1>



<section class="contenedor-productos">


<div class="producto">

<img src="{{ asset('imagenes/productos/epsonl3210.png') }}">


<div class="nombre-producto">

Impresora Multifuncional

<br>

Epson EcoTank L3210

</div>

</div>




<div class="producto">

<img src="{{ asset('imagenes/productos/epsonl3250.png') }}">


<div class="nombre-producto">

Impresora Multifuncional

<br>

Epson EcoTank L3250

</div>

</div>




<div class="producto">

<img src="{{ asset('imagenes/productos/canong3010.png') }}">


<div class="nombre-producto">

Impresora Canon Pixma MG3010

</div>

</div>




<div class="producto">

<img src="{{ asset('imagenes/productos/hpm111w.png') }}">


<div class="nombre-producto">

Impresora HP LaserJet M111w

</div>

</div>



</section>



@endsection