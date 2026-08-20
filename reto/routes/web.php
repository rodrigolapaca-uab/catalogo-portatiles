<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Route;
/*use App\Models\Libro;*/

/*Route::get('/', function () {
    return view('index');
});*/

/*Route::get('/libros', function () {
    $libros = Libro::all();

    return view('libros', [
        'libros' => $libros
    ]);
});

Route::get('/libros/nuevo', function () {
    return view('nuevo-libro');
});

Route::post('/libros/nuevo', function () {

    request()->validate(
        [
            'titulo' => 'required',
            'precio' => 'required|integer'
        ],
        [
            'titulo.required' => 'Falta el título del libro.',
            'precio.required' => 'Falta el precio del libro.',
            'precio.integer' => 'Ese precio no es un número entero.'
        ]
    );

    Libro::create([
        'titulo' => request()->input('titulo'),
        'precio' => request()->input('precio')
    ]);

    return redirect('/libros');
});*/

/*
|--------------------------------------------------------------------------
| Página principal
|--------------------------------------------------------------------------
*/


Route::get('/', function () {

    return view('login');

})->name('login');




/*
|--------------------------------------------------------------------------
| Páginas generales
|--------------------------------------------------------------------------
*/
Route::get('/index', function () {

    return view('index');

})->name('inicio');


Route::get('/ofertas', function () {

    return view('ofertas');

})->name('ofertas');




Route::get('/contacto', function () {

    return view('contacto');

})->name('contacto');

Route::post('/contacto', function () {

    return "Mensaje enviado correctamente";

});


Route::get('/quienes-somos', function () {

    return view('quienes-somos');

})->name('quienes');





/*
|--------------------------------------------------------------------------
| Catálogo de productos
|--------------------------------------------------------------------------
*/



Route::get('/productos/portatiles', function () {

    return view('productos.portatiles');

})->name('portatiles');





Route::get('/productos/cpu', function () {

    return view('productos.cpu');

})->name('cpu');





Route::get('/productos/impresoras', function () {

    return view('productos.impresoras');

})->name('impresoras');





Route::get('/productos/monitores', function () {

    return view('productos.monitores');

})->name('monitores');





Route::get('/productos/accesorios', function () {

    return view('productos.accesorios');

})->name('accesorios');





Route::get('/productos/suministros', function () {

    return view('productos.suministros');

})->name('suministros');



//login//
Route::get('/login', function(){

    return view('login');

});



Route::post('/login', function(Request $request){


    $email = $request->email;
    $password = $request->password;


    // Usuario de prueba

    if(
        $email == "rodrigo@gmail.com" &&
        $password == "123456"
    ){

        Session::put('usuario',$email);


        return redirect('/index');


    }


    return back()->with(
        'error',
        'Usuario o contraseña incorrectos'
    );


});
Route::get('/logout', function(){

    Session::forget('usuario');

    return redirect('/login');

});