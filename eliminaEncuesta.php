<h1>eliminar un registro de encuesta</h1>

<?php 
    $id = $_GET["id"];

    require "conexion.php";
    $objConexion=conectarse();

    $sql="delete from  encuesta where id='$id'";
    $resultado = $objConexion->query($sql);
    


   

header("location:eliminarEncuesta.php?error=si");
?>