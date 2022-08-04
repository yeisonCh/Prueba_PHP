<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Encuestas</title>
    <link href="css/estilo.css" rel="stylesheet">
</head>
    <?php

    include("sesiones.php");

    require "conexion.php";
    $objConexion=conectarse();
    $consulta = "SELECT * FROM encuesta";
	 $ejecutar= $objConexion->query($consulta);
	?>


<body>
  <h1>Encuestas</h1>
  <h2>Pulse el boton para eliminar encuestas</h2>

<table width="941" align = "center">
  <tr>
    <td width="60"></td>
    <td width="71">Documento</td>
    <td width="210">Email </td>
    <td width="330">Comentario </td>
    <td width="100">Marca </td>
    <td width="100">Fecha</td>
    <td width="70">Eliminar</td>

    
  </tr>
   <?php
while ($registro = $ejecutar->fetch_assoc())
{
	?> 
  <tr>
    <td><?php echo $registro["id"]?></td>
    <td><?php echo $registro["documento"]?></td>
    <td><?php echo $registro["email"]?>&nbsp;</td>
    <td><?php echo $registro["comentario"]?>&nbsp;</td>
    <td><?php echo $registro["marca"]?>&nbsp;</td>
    <td><?php echo $registro["fecha"]?>&nbsp;</td>
    <td><a href="eliminaEncuesta.php?id=<?php echo $registro["id"]?>"><img src="imagenes/eliminarId.png" width="26" height="34"/></a></td>

       
    
  </tr>
  <?php
}
?>
</table>
<?php

    error_reporting(E_STRICT ^ E_NOTICE);

    if($_GET["error"]=="si"){
        echo"<span>Se ha eliminado el registro</span>";
        echo "<br>";
    }else{
       
    }

    ?>
    <section>
<button onclick="location.href='principal.php'">Regresar</button>
<button onclick="location.href='salir.php'">Salir</button>
    
    </section>

    <footer>
    <p>Yeison Andres Chaparro  3214634601   https://github.com/yeisonCh</p>
  </footer>

    
</body>
</html>