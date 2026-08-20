<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">

<title>Login</title>

<style>

body{
    font-family: Arial;
    background:#f2f2f2;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}


.login{

    background:white;
    padding:30px;
    width:300px;
    border-radius:10px;
    box-shadow:0 0 10px #ccc;

}


input{

    width:100%;
    padding:10px;
    margin:10px 0;

}


button{

    width:100%;
    padding:10px;
    background:#2563eb;
    color:white;
    border:none;
    border-radius:5px;
    cursor:pointer;

}


.error{

    color:red;
}


</style>

</head>


<body>


<div class="login">


<h2>Iniciar Sesión</h2>


@if(session('error'))

<p class="error">
{{ session('error') }}
</p>

@endif



<form method="POST" action="/login">

@csrf


<input 
type="email"
name="email"
placeholder="Correo"
required
>



<input 
type="password"
name="password"
placeholder="Contraseña"
required
>


<button type="submit">
Ingresar
</button>


</form>


</div>


</body>

</html>