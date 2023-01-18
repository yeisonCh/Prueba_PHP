<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta </title>
    <link href="css/estilo.css" rel="stylesheet">
    
   

</head>
<body>
    <form name="inicio" method="post" action="agregarEncuesta.php">

    <h1>Encuesta </h1>
    <?php

    
    error_reporting(E_STRICT ^ E_NOTICE);
    error_reporting(0);
    if($_GET["error"]=="si"){
        echo"<span>Se registro encuesta satisfactoriamente</span>";
    }else{
        
    }

    
    include("sesiones.php");
    ?>

    <section>
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
    
</section>
<button onclick="location.href='principal.php'">Regresar</button>
<button onclick="location.href='salir.php'">Salir</button>


    </form>
    
    <footer>
    <p>Yeison Andres Chaparro  3214634601   https://github.com/yeisonCh</p>
    </footer>
    
</body>
</html>