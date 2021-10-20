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
                    <input type="text" name="nombre">
                </td>
            </tr>
            <tr>
                <td>Dirección</td>
                <td>
                    <textarea name="direccion" rows="4"></textarea>
                </td>
            </tr>
            <tr>
                <td>Correo eletrónico</td>
                <td>
                    <input type="email" name="correo">
                </td>
            </tr>
            <tr>
                <td>Contraseña</td>
                <td>
                    <input type="password" name="password">
                </td>
            </tr>
            <tr>
                <td>Confirmar contraseña</td>
                <td>
                    <input type="password" name="c-password">
                </td>
            </tr>
            <tr>
                <td>Fecha de nacimiento</td>
                <td>
                    <select name="mes">
                        <option value="Enero">Enero</option>
                        <option value="Febrero">Febrero</option>
                        <option value="Marzo">Marzo</option>
                        <option value="Abril">Abril</option>
                        <option value="Mayo">Mayo</option>
                        <option value="Junio">Junio</option>
                        <option value="Julio">Julio</option>
                        <option value="Agosto">Agosto</option>
                        <option value="Septiembre">Septiembre</option>
                        <option value="Octubre">Octubre</option>
                        <option value="Noviembre">Noviembre</option>
                        <option value="Diciembre">Diciembre</option>
                    </select>
                    <select name="dia">
                        <?php for ($i=1; $i <= 31; $i++) { ?>
                        <option value="<?php echo $i ?>"><?php echo $i ?></option>
                        <?php } ?>
                    </select>
                    <input type="number" name="anio" style="width:45px;">
                </td>
            </tr>
            <tr>
                <td>Sexo</td>
                <td>
                    <div class="w50">
                        <input type="radio" name="sexo" value="Hombre" style="width:25px;">
                        <label for="sexoM">Hombre</label>
                    </div>
                    <div class="w50">
                        <input type="radio" name="sexo" value="Mujer" style="width:25px;">
                        <label for="sexoF">Mujer</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Por favor elige los temas de interés</td>
                <td>
                    <div class="w50">
                        <input type="checkbox" name="interes[]" id="ficcion" value="Ficción" style="width:25px;">
                        <label for="ficcion">Ficción</label>
                    </div>
                    <div class="w50">
                        <input type="checkbox" name="interes[]" id="terror" value="Terror" style="width:25px;">
                        <label for="terror">Terror</label>
                    </div>
                    <div class="w50">
                        <input type="checkbox" name="interes[]" id="accion" value="Acción" style="width:25px;">
                        <label for="accion">Acción</label>
                    </div>
                    <div class="w50">
                        <input type="checkbox" name="interes[]" id="comedia" value="Comedia" style="width:25px;">
                        <label for="comedia">Comedia</label>
                    </div>
                    <div class="w50">
                        <input type="checkbox" name="interes[]" id="suspenso" value="Suspenso" style="width:25px;">
                        <label for="suspenso">Suspenso</label>
                    </div>
                </td>
            </tr>
        </table>
        <button type="submit">Ingresar usuario</button>
    </form>
</body>

</html>