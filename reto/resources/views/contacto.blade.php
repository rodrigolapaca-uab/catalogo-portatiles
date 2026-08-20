@extends('layouts.base')


@section('css')

<link rel="stylesheet" href="{{ asset('css/contacto.css') }}">

@endsection



@section('contenido')


<main>


<section class="contacto-box">



<div class="formulario">


<h1>
¡Hablemos!
</h1>



<p>

¿Quieres ponerte en contacto con nosotros?
Completa el formulario y nos pondremos en contacto contigo lo antes posible.

</p>




<form method="POST">


@csrf


<label>
Tu nombre
</label>


<input type="text" placeholder="Nombre...">



<label>
Tu correo electrónico
</label>


<input type="email" placeholder="Email...">



<label>
Tu mensaje
</label>


<textarea placeholder="Mensaje..."></textarea>



<button>
Enviar Mensaje
</button>



</form>


</div>




<div class="informacion">


<img src="{{ asset('imagenes/contacto.png') }}" class="imagen-contacto">



<p>
📍 Av. Heroinas, entre Junin y Hamiraya #6542
</p>



<p>
📞 65337793
</p>



<p>
✉ techsoluciones@gmail.com
</p>



<p>
Facebook | Twitter | Instagram
</p>



</div>



</section>


</main>



@endsection