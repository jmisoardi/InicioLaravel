<?php

use Illuminate\Support\Facades\Route;

//Importamos Controladores como prueba de uso de controladores
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

//Siempre las rutas revisamos las rutas de que tipo son:
//GET, POST, PUT, PATCH, DELETE

//Vamos a trajar con peticiones de tipo: 
//Get: Son aquellas que nos redirigen a una vista o nos muestran información.
//Post: Son aquellas que nos envían información a través de formularios.
//Put: Son aquellas que nos permiten actualizar información.
//Patch: Son aquellas que nos permiten actualizar información parcialmente.
//Delete: Son aquellas que nos permiten eliminar información.


/*  Route::get('/', function () {
        return "Bienvenido a mi pagina de iniciación.";
        //view('welcome');
    });
*/

//Utilizamos Controladores para manejar las rutas ,HomeController y PostController, mas limpio el código.
Route:: get('/', [HomeController::class, 'index']);
Route:: get('/welcome', [HomeController::class, 'welcome']);
Route:: get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/show/{vista?}', [PostController::class, 'show']);

//Esta es ua ruta de tipo GET que retorna un texto simple 
/*Route:: get('/posts/create', function(){
    return "Ahora estamos en Crear un nuevo Post";
});
*/
//Utilizar las rutas de esta manera es más eficiente y organizado, ya que nos permite separar la lógica de la aplicación en controladores, lo que facilita el mantenimiento y la escalabilidad del código. Además, al usar controladores, podemos reutilizar métodos y lógica en diferentes rutas, lo que mejora la eficiencia del desarrollo.
//Route::get('/posts/{vista?}', [PostController::class, 'show']);


/*Route::get('/posts/{post}', function($post){
    return "Mostrando el Post: $post";
});
*/

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

//Podemos trabajar rutas con parámetros dinámicos, una solo ruta para varios (articulos o posts)
/* Route::get('/posts/{post}', function($post){
    return "Aqui se mostrará el Post: $post";
}); */

//Podemos trabajar con rutas pero con parámetros opcionales para esto usamos el símbolo "?"
Route::get('/usuario/{nombre?}', function($nombre=null){
    return "Buenvenido Usuario: $nombre";
});

//Podemos trabajar con rutas que tengan más de un parámetro, y tambien parametros opcionales usando el símbolo "?"
Route::get('/usuario/{nombre}/{apellido?}',function($nombre, $apellido=null){
    return "Mostrando la ruta con varios parámetros. Su nombre es: $nombre, apellido: $apellido";
});

//Podemos trabajar con rutas que tengan más de un parámetro y usar condicionales 
Route::get('/productos/{categoria}/{producto?}', function ($categoria, $producto=null){
    if($producto){
        return "Usted esta en la Categoria: $categoria con su producto: $producto";
    }else{
        return "Mostrando la categoria: $categoria";
    }
});


