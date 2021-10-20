<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz Cuadrada Aleatoria</title>
    <style>
    body,
    form {
        width: 400px;
        margin: auto;
    }
    input{
        padding:10px;
    }
    input,
    label,
    h1,
    h2 {
        width: 100%;
        margin: 5px 0;
    }

    h2 {
        margin-top: 2rem;
    }

    button {
        width: 100%;
        margin: 5px 0;
        background-color: #222;
        color: #fff;
        padding: 10px 15px;
        display: block;
    }
    </style>
</head>

<body>
    <form action="" method="post">
        <h1>Ingreso de datos</h1>
        <label for="">Columnas</label>
        <input type="number" name="col">
        <label for="">Filas</label>
        <input type="number" name="row">
        <button type="submit">Generar Matriz</button>
    </form>
</body>

</html>
<?php 
 if($_POST){ 
     //inicializamos variables para con datos enviados desde el metodo post del formulario
    $cols = $_POST['col'];
    $rows = $_POST['row'];
    $posicion = "";
    $matriz = array();
    //repetimos por cada fila y columna segun los datos ingresados
    for ($i=1; $i <= $rows; $i++) { 
        $letra = 'A';    
        for ($j=0; $j < $cols; $j++) { 
            $matriz[$i][$j] = rand(0,1);
            $posicion .= $letra.$i."-".$matriz[$i][$j]."; ";
            ++$letra;
        }
    }
    //mostramos matriz generada en pantalla
    echo  '<h2>MATRIZ GENERADA</h2>';
    if($cols == $rows){
        echo  '<label>Es una matriz "perfecta"</label><br><br>';
    }else{
        echo  '<label>No es una matriz cuadrada</label><br><br>';
    }
    echo $posicion;
 }
?>