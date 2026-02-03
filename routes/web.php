<?php

use Illuminate\Support\Facades\Route;

//Siempre las rutas revisamos las rutas de que tipo son:
//GET, POST, PUT, PATCH, DELETE

//Vamos a trajar con peticiones de tipo: 
//Get: Son aquellas que nos redirigen a una vista o nos muestran información.
//Post: Son aquellas que nos envían información a través de formularios.
//Put: Son aquellas que nos permiten actualizar información.
//Patch: Son aquellas que nos permiten actualizar información parcialmente.
//Delete: Son aquellas que nos permiten eliminar información.


Route::get('/', function () {
    return "Bienvenido a mi pagina de iniciación.";
    //view('welcome');
});

Route:: get('/posts', function(){
    return "Estamos en la sección public/posts";
});

Route:: get('/sesion', function(){
    return "Ahora estamos en Sesión";
});


//Vamos a trabajar con la ruta de tipo POST
//Las distintas rutas para mostrar los distintos posts o artículos de un blog.
Route::get('/posts/post-1', function(){
    return "Aqui se mostrará el Post 1";
});

Route::get('/posts/post-2',function(){
    return "Aqui se mostrará el Post 2";
});

Route::get('/posts/post-3',function(){
    return "Aqui se mostrará el Post 3";
});

//Podemos trabajar rutas con parámetros dinámicos
Route::get('/posts/{post}', function($post){
    return "Aqui se mostrará el Post: $post";
});

//Podemos trabajar con rutas pero con parámetros opcionales
Route::get('/usuario/{nombre?}', function($nombre=null){
    return "Buenvenido Usuario: $nombre";
});

//Podemos trabajar con rutas que tengan más de un parámetro
Route::get('/posts/{articulo}/{categoria?}',function($articulo, $categoria=null){
    return "Mostrando la ruta con varios parámetros. Artículo: $articulo, categoria: $categoria";
});

//Podemos trabajar con rutas que tengan más de un parámetro y usar condicionales
Route::get('/productos/{producto}/{categoria?}', function ($producto, $categoria=null){
    if($categoria){
        return "Mostrando el producto:$producto de la categoría: $categoria";
    }else{
        return "Mostrando el producto: $producto ";
    }
});


