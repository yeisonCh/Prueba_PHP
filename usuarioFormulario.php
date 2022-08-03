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
    <form name="inicio" method="post" action="agregarUser.php">
    <?php

    error_reporting(E_STRICT ^ E_NOTICE);

    if($_GET["error"]=="si"){
        echo"<span>Se registro con exito</span>";
    }else{
        echo"Introduce tus datos";
    }
    
    ?>

    <div>
        <br>
        <h2>Registarse en la aplicación</h2>
        <br>
        <br>
        <img src="imagenes/usuario.png" width="95" height="95" alt="imagen usuario">
        <br>
        <br>
        <label for="usuario">Usuario: </label>
        <br>
        <input type="text" name="usuario_txt" placeholder="Escribe tu identificacion" title="Ingresa tu identificacion" required="required">
        <br><br>
        <label for="password">Contraseña: </label>
        <br>
        <input type="text" name="password_txt" placeholder="Escribe tu contraseña" title="Ingresa tu contraseña" required="required">
        <br><br>
        <input type="submit" name="enviar_btn" value="Registar">
        <br><br>
        <a href="salir.php">SALIR</a>

    </div>

    </form>
    
    
</body>
</html>