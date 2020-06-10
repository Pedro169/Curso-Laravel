<?php


Route::view('/', 'home')->name('home');
Route::view('/abaut', 'abaut')->name('abaut');
Route::get('/portafolio','portafolioController@index')->name('portafolio');
Route::view('/contact', 'contact')->name('contact');
Route::post('contact', 'MessagesController@store');







/*Route::view('/', 'home', ['nombre' => 'jorge']);//se puede realizar su uso para paginas de politicas de privacidad, terminos y condiciones paginas que no requieren mucha logica => igual retorna un nombre pero es un paso mas corto que la de abajo*/

/*Route::get('/', function(){ //esta funcion es para retornar un nombre
	$nombre = "Pedro";
	return view('home',compact('nombre'));

	es la forma mas corta con la funcion compact

	 /*otras formas de enviar la variable con el mismo resultado en forma de arreglo (['nombre' => $nombre]), el arreglo como segundo parametro de la funcion view ('home',['nombre' => $nombre]), o se puede realizar c('home')->with('nombre', $nombre);
});*/

/*Route::get('/', function(){
	return"Hola desde la pagina de inicio" //paginas estaticas
});

Route::get('contacto', function(){
	return "Hola desde la pagina de contacto";
});

Route::post()//formularios de contacto*/

/*Route::get('saludo/{nombre?}', function($nombre = "invitado"){
	return"saludos " . $nombre;
});*/

