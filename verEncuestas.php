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
  <h1>Lista de encuestas</h1>
  
  <section>
    <br><br>
    <table width="811" border="1" align= "center">
      <tr>
        <td width="71">Documento</td>
        <td width="210">Email </td>
        <td width="330">Comentario </td>
        <td width="100">Marca </td>
        <td width="100">Fecha</td>
        
      </tr>
      <?php
    while ($registro = $ejecutar->fetch_assoc())
    {
      ?> 
      <tr>
        <td><?php echo $registro["documento"]?></td>
        <td><?php echo $registro["email"]?>&nbsp;</td>
        <td><?php echo $registro["comentario"]?>&nbsp;</td>
        <td><?php echo $registro["marca"]?>&nbsp;</td>
        <td><?php echo $registro["fecha"]?>&nbsp;</td>
        
      </tr>
      <?php
    }
    ?>
    </table>


  </section>
<section>

<br><br>
<button onclick="location.href='principal.php'">Regresar</button>
<button onclick="location.href='salir.php'">Salir</button>
</section>




    
</body>
</html>