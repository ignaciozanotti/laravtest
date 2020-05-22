<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cursos </h1>

    <?php
    //echo $nombre;
    ?>

    <ul>
        @foreach($datos as $key=>$value)
                <li> {{$key.' -> '.$value}} </li>
        @endforeach
    </ul>
    
     @if($datos['curso3'] == 'Javascript')
     I like Js
     @elseif($datos['curso1'] == 'Javascript')
     el 1 es Js
     @else
     nada
     @endif

</body>
</html>