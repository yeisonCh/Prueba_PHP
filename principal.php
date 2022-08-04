<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index prueba</title>
    
    <link href="css/estilo.css" rel="stylesheet">
    

</head>
<body>
    
    <?php
    include("sesiones.php");
    echo "Bienvenido usuario: ".$_SESSION['user'];
    ?>

<header> 
    <hgroup>
        <h1>Menú principal aplicación encuentas</h1>
        <h2>Seleccione la acción deseada</h2>
    </hgroup>

</header>

<form name="inicio" method="post" action="salir.php">
    <section>
        <figure>
                <a href="encuestaFormulario.php"><img src="imagenes/encuesta.png" width="100" height="120"/></a>
                    <figcaption>Encuesta</figcaption>   
                </figure>
                    
                <figure>
                    <a href="verEncuestas.php"><img src="imagenes/verEncuesta.png" width="100" height="120"/></a>
                        <figcaption>Ver Encuestas:  </figcaption>
                </figure>

                <figure>
                    <a href="eliminarEncuesta.php"><img src="imagenes/eliminar.png" width="100" height="120"/></a>
                <figcaption>Eliminar Encuestas:</figcaption>
                </figure>

    </section>
        
    <div>
        <input type="submit" name="enviar_btn" value="Salir">
    </div>
    
        

    

</form>

<footer>
    <p>Yeison Andres Chaparro  3214634601   https://github.com/yeisonCh</p>
</footer>
    
    
</body>
</html>