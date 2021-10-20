<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
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
    <form action="" method="post" enctype="multipart/form-data">
        <h1>Ingreso de datos</h1>
        <label for="">Especialidad</label>
        <select name="especialidad" id="">
            <option value="Testing">Testing</option>
            <option value="Programacion">Programacion</option>
            <option value="Algoritmos">Algoritmos</option>
            <option value="Base de datos">Base de datos</option>
            <option value="Investigacion">Investigacion</option>
        </select>
        <label for="">Archivo</label>
        <input type="file" name="file">
        <button type="submit">Subir archivo</button>
        <a href="ejercicio4A.php"><button type="button">Ver directorio</button></a>
    </form>
    <?php 
    if($_POST){
        $especialidad = $_POST['especialidad'];
        $dir_subida = "uploads/$especialidad";
        $fichero_subido = $_FILES['file']['name'];
        if (!file_exists($dir_subida)) {
            mkdir($dir_subida, 0777, true);
        }
        if(move_uploaded_file($_FILES['file']['tmp_name'], $dir_subida."/".$fichero_subido)){
            echo "<h2>Archivo subido con exito</h2>";
        }else{
            echo "<h2>Error al subir archivo</h2>";
        }
    }
    ?>
</body>

</html>