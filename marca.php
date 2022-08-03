<?php 
    require "conexion.php";
    $objConexion=conectarse();

    $sql="select * from  pc order by marcaPc";
    $resultado = $objConexion->query($sql);


    while($marca = $resultado->fetch_assoc()){
        echo "<option value='".$marca["marcaPc"]."'>".$marca["marcaPc"]."</option>";
    }
?>