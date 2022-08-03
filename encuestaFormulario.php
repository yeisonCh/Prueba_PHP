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
    <form name="inicio" method="post" action="agregarEncuesta.php">
    <?php

    error_reporting(E_STRICT ^ E_NOTICE);

    if($_GET["error"]=="si"){
        echo"<span>Se registro encuesta satisfactoriamente</span>";
    }else{
        echo"Introduce los datos";
    }

    
    include("sesiones.php");
    ?>

    <div>
        <br>
        <label for="usuario">Usuario: </label>
        <br>
        <input type="" name="usuario_txt" readonly value="<?php echo $_SESSION['user']; ?>" >
        <br><br>
        <label for="email">Email: </label>
        <br>
        <input type="email" name="email_txt" placeholder="Escribe tu email" title="Ingresa tu email" required="required">
        <br><br>
        <label for="email">Comentarios: </label>
        <br>
        <textarea name="comentarios_txa" required="required"></textarea>
        <br><br>
        <label for="marca">Marca Pc: </label>
        <br>
        <select name="marca_slc"><option value="">-------</option><?php include("marca.php");?></select>
        <br><br>
        <label for="date">Fecha: </label>
        <br>
        <input type="" readonly name="date_txt" value="<?php echo $fecha = date('m-d-Y h:i:s a', time());?>">
        <br><br>
        <input type="submit" name="enviar_btn" value="Registrar consulta">
    
    </div>

    </form>
    
    
</body>
</html>