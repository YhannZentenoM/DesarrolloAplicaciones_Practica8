<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <style>
        body,form{
            width:400px;
            margin: auto;
        }
        input{
            padding:10px;
        }
        input,
        label,
        h1, h2{
            width: 100%;
            margin: 5px 0;
        }
        h2{
            margin-top: 2rem; 
        }
        button{
            width: 100%;
            margin: 5px 0;
            background-color: #222;
            color: #fff;
            padding: 10px 15px;
            display:block;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <h1>Venta de pasajes aéreos</h1>
        <label for="">Fecha de nacimiento</label>
        <input type="date" name="nacimiento">
        <button type="submit">Determinar precio</button>
    </form>
    <?php if($_POST){ 
        //inicializamos variable del pasaje
        $pasaje = 150;
        //obtenemos la fecha de nacimiento mediante metodo POST del formulario
        $fechaNac = $_POST['nacimiento'];
        //separamos los dias, mes y año con el metodo explode
        list($ano,$mes,$dia) = explode("-",$fechaNac);
        //inicializamos variables para cada numero de la fecha
        $anoDif  = date("Y") - $ano;
        $mesDif = date("m") - $mes;
        $diaDif   = date("d") - $dia;
        //si los dias o meses son menores cero le restamos un año a la diferencia
        if ($diaDif < 0 || $mesDif < 0)
            $anoDif--;
        $edad = $anoDif;
        //validamos a que rango de edad pertenece la persona ingreda y mpostramos en pantalla
        if($edad > 17){
            echo '<h2>Monto pasaje: Adulto ('.$edad.') S/'. $pasaje .'</h2>';
        }elseif($edad >= 2 && $edad <= 17){
            $pasaje = ($pasaje*75)/100;
            echo '<h2>Monto pasaje: Menores de edad ('.$edad.') S/'. $pasaje .'</h2>';
        }elseif($edad < 2){
            $pasaje = 0;
            echo '<h2>Monto pasaje: Infantes ('.$edad.') S/'. $pasaje .'</h2>';
        }
    }
    ?>
</body>
</html>