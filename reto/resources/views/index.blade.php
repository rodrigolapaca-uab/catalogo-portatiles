@extends('layouts.base')


@section('css')

<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">

@endsection



@section('contenido')



<section class="bienvenida">


<h1>
Todo lo que necesitas para conectar, trabajar y crear
</h1>



<p>

¡Bienvenidos a nuestro catálogo!

En TSC (Tech Soluciones Computo) sabemos que cada usuario es único.

Por eso, hemos reunido en un solo lugar la mejor tecnología del mercado
para acompañarte en tus estudios, tu oficina o tus proyectos creativos.

</p>



<p>

Explora nuestra selección de portátiles con la potencia que buscas,
impresoras listas para plasmar tus ideas y una amplia gama de accesorios
indispensables.

</p>


<p>

Calidad, garantía y el respaldo que mereces al alcance de tus manos.

</p>


</section>





<section class="categorias">



<!-- PORTATILES -->

<div class="categoria">


<a href="{{ route('portatiles') }}">


<img src="{{ asset('imagenes/laptop.png') }}">


<h2>
PORTÁTILES
</h2>


</a>


</div>





<!-- CPU -->


<div class="categoria">


<a href="{{ route('cpu') }}">


<img src="{{ asset('imagenes/pc.png') }}">


<h2>
PC DE ESCRITORIO
</h2>


</a>


</div>





<!-- MONITORES -->


<div class="categoria">


<a href="{{ route('monitores') }}">


<img src="{{ asset('imagenes/monitor.png') }}">


<h2>
MONITORES
</h2>


</a>


</div>






<!-- IMPRESORAS -->


<div class="categoria">


<a href="{{ route('impresoras') }}">


<img src="{{ asset('imagenes/impresora.png') }}">


<h2>
IMPRESORAS
</h2>


</a>


</div>


<!-- ACCESORIOS -->


<div class="categoria">


<a href="{{ route('accesorios') }}">


<img src="{{ asset('imagenes/accesorios.png') }}">


<h2>
ACCESORIOS
</h2>


</a>


</div>


<!-- SUMINISTROS -->


<div class="categoria">


<a href="{{ route('suministros') }}">


<img src="{{ asset('imagenes/suministros.png') }}">


<h2>
SUMINISTROS
</h2>


</a>


</div>



</section>




@endsection