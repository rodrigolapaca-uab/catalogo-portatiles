<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>TSC Tech Soluciones Computo</title>


<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">


@yield('css')


</head>


<body>


<header>


<img src="{{ asset('imagenes/logo.png') }}" class="logo">



<nav>


<a href="{{ route('inicio') }}">
Inicio
</a>


<a href="{{ route('ofertas') }}">
Ofertas
</a>


<a href="{{ route('contacto') }}">
Contacto
</a>


<a href="{{ route('quienes') }}">
Quienes somos
</a>



</nav>



</header>



@yield('contenido')



</body>

</html>