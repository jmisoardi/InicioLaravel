<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Esta es la URL: http://localhost/InicioLaravel/public/posts para el ingreso a los posts
class PostController extends Controller
{
    public function index (){
        return view('posts/index');
    } 
    public function create(){
        return view('posts/create');
    }
    public function show ($vista = null){
        //Compact es una función de PHP que crea un array asociativo a partir de variables y sus valores.
        //Ademas de pasar el valor de la variable $vista a la vista.
        
        
    //Estas son las dos formas de pasar variables a la vista en Laravel:

        //return view('posts/show', compact('vista'));
        //return view('posts/show')->with('vista', $vista);
    
    //Ambas formas son correctas y dependen de la preferencia del desarrollador.
    //En mi caso usare la segunda forma: porque me parece más claro, ya que especifica el nombre de la variable en la vista que estoy pasando o utilizando.
        return view('posts/show')->with('vista', $vista);
        
        
        
    }
}
