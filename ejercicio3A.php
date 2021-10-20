<?php
if($_POST){
    $nombres = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $nacimiento = $_POST['dia']."/".$_POST['mes']."/".$_POST['anio'];
    $sexo = $_POST['sexo'];
    $interes = $_POST['interes'];
}else{
    $nombres = "";
    $direccion = "";
    $correo = "";
    $password = "";
    $nacimiento = "";
    $sexo = "";
    $interes = "";
}
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuario</title>
    <style>
        body,
        form {
            width: 400px;
            margin: auto;
        }

        input,
        select {
            padding: 10px;
        }

        input,
        label,
        h1,
        h2,
        textarea
        {
            width: 100%;
            margin: 5px 0;
        }
        .w50{
            float:left;
            width: 45%;
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
        table,
        table tr td{
            border: 1px solid #000;
        }
        table tr td{
            padding: 5px;
        }
    </style>
</head>

<body>
    <form action="ejercicio3A.php" method="post">
        <h1>Registro de usuarios</h1>
        <table width="100%">
            <tr>
                <td>Nombre completo</td>
                <td>
                    <label><?php echo $nombres ?></label>
                </td>
            </tr>
            <tr>
                <td>Dirección</td>
                <td>
                <label><?php echo $direccion ?></label>
                </td>
            </tr>
            <tr>
                <td>Correo eletrónico</td>
                <td>
                    <label><?php echo $correo ?></label>
                </td>
            </tr>
            <tr>
                <td>Contraseña</td>
                <td>
                    <label><?php echo $password ?></label>
                </td>
            </tr>
            <tr>
                <td>Fecha de nacimiento</td>
                <td>
                    <label><?php echo $nacimiento ?></label>
                </td>
            </tr>
            <tr>
                <td>Sexo</td>
                <td>
                    <label><?php echo $sexo ?></label>
                </td>
            </tr>
            <tr>
                <td>Por favor elige los temas de interés</td>
                <td>
                    <?php foreach($interes as $selected): ?>
                    <label><?php echo $selected ?></label><br>
                    <?php endforeach; ?>
                </td>
            </tr>
        </table>
        <button type="submit">Confirmar datos</button>
    </form>
</body>

</html>