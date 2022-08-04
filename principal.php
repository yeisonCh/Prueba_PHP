<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index prueba</title>
    
    <style>
        form{
            margin:0 auto;
            text-align: center;
            width: 400px;
        }

        span{
            color: #f00;
            font-size: 2em;
        }
    </style>

</head>
<body>
    <form name="inicio" method="post" action="salir.php">
    <?php
    include("sesiones.php");
    echo "Bienvenido usuario: ".$_SESSION['user'];
    ?>

    <div>
        <br>
        <label for="usuario">Encuesta : </label>
        <br>
        <a href="encuestaFormulario.php"><img src="imagenes/encuesta.png" width="80" height="95"/></a>
        <br><br>
        <label for="encuesta">Ver Encuestas: </label>
        <br>
        <a href="verEncuestas.php"><img src="imagenes/verEncuesta.png" width="80" height="95"/></a>
        <br><br>
        <label for="eliminar">Eliminar Encuestas: </label>
        <br>
        <a href="eliminarEncuesta.php"><img src="imagenes/eliminar.png" width="80" height="95"/></a>
        <br><br>
        <input type="submit" name="enviar_btn" value="Salir">

    </div>

    </form>
    
    
</body>
</html>