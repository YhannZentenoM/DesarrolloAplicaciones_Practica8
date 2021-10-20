<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body,
    form {
        width: 400px;
        margin: auto;
    }

    select,input {
        padding: 10px;
    }

    input,
    label,
    h1,
    h2,
    select {
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
        <h1>Directorio</h1>
        <label for="">Especialidad</label>
        <select name="especialidad" id="">
            <option value="Testing">Testing</option>
            <option value="Programacion">Programacion</option>
            <option value="Algoritmos">Algoritmos</option>
            <option value="Base de datos">Base de datos</option>
            <option value="Investigacion">Investigacion</option>
        </select>
        <button type="submit">Ver directorio</button>
        <a href="ejercicio4.php"><button type="button">Subir archivos</button></a>
    </form>
    <?php 
    if($_POST){
        $especialidad = $_POST['especialidad'];
        $ruta = "uploads/".$especialidad;
        // obtener_estructura_directorios($ruta);

        // function obtener_estructura_directorios($ruta){
            // Se comprueba que realmente sea la ruta de un directorio
        if (is_dir($ruta)){
            // Abre un gestor de directorios para la ruta indicada
            $gestor = opendir($ruta);
            echo "<ul>";
    
            // Recorre todos los elementos del directorio
            while (($archivo = readdir($gestor)) !== false)  {
                    
                $ruta_completa = $ruta . "/" . $archivo;
    
                // Se muestran todos los archivos y carpetas excepto "." y ".."
                if ($archivo != "." && $archivo != "..") {
                    // Si es un directorio se recorre recursivamente
                    if (is_dir($ruta_completa)) {
                        echo "<li>" . $archivo . "</li>";
                        obtener_estructura_directorios($ruta_completa);
                    } else {
                        echo "<li><a target='_blank' href='".$ruta."/".$archivo."'>" . $archivo . "</a></li>";
                    }
                }
            }
            
            // Cierra el gestor de directorios
            closedir($gestor);
            echo "</ul>";
        } else {
            echo "No es una ruta de directorio valida<br/>";
        }
        // }
    }
    ?>
</body>
</html>