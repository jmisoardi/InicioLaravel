<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index (){
        return "Probando el controlador  PostController";
    } 
    public function create(){
        return "Aqui se mostrará el formulario para crear un nuevo Post";
    }
    public function show ($vista){
        return "Estamos mostrando el Post solicitado, usando el método Show $vista";
    }
}
