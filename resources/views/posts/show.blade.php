<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show-Laravel 11 | Posts</title>
</head>
<body>
     <h1>"Estamos mostrando el Post solicitado, usando el método Show "<?=$vista?>" o tambien podemos 
            usar "{{ $vista }}" del PostController"            
    </h1>
    <br>
    <br>
       @isset ($vista)
           <h1>Este es el contenido del Post: {{ $vista }} </h1>
       @else
           <p>No se ha proporcionado ningún Post específico.</p>
       @endif
        

</body>
</html>