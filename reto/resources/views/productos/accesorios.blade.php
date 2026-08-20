@extends('layouts.base')


@section('css')

<link rel="stylesheet" href="{{ asset('css/productos.css') }}">

@endsection



@section('contenido')


<h1 class="titulo">
ACCESORIOS
</h1>



<section class="contenedor-productos">



<div class="producto">


<img src="{{ asset('imagenes/productos/mousegenius.png') }}">


<div class="nombre-producto">

Mouse Genius G4110

</div>


</div>




<div class="producto">


<img src="{{ asset('imagenes/productos/mousedelux.png') }}">


<div class="nombre-producto">

Mouse Óptico Alámbrico USB Deluxe M138

</div>


</div>




<div class="producto">


<img src="{{ asset('imagenes/productos/mouselogitech.png') }}">


<div class="nombre-producto">

Mouse Logitech G305

</div>


</div>




<div class="producto">


<img src="{{ asset('imagenes/productos/tecladogenius.png') }}">


<div class="nombre-producto">

Teclado Genius KB-100X

</div>


</div>




<div class="producto">


<img src="{{ asset('imagenes/productos/audifonoganius.png') }}">


<div class="nombre-producto">

Audífonos Genius HS-810BT

<br>

BT5.3 inalámbricos

<br>

8 horas

<br>

Micrófono interno

</div>


</div>



</section>



@endsection