<?php 


$usuario = $_POST['usuario_txt'];
$email = $_POST['email_txt'];
$comentario = $_POST['comentarios_txa'];
$marca = $_POST['marca_slc'];
$fecha = $_POST['date_txt'];


require "conexion.php";
$objConexion=conectarse();

$sql= "INSERT INTO encuesta SET id='', documento='$usuario', email='$email',	comentario='$comentario', marca='$marca', fecha=NOW()";
$resultado = $objConexion->query($sql);

if($resultado)
{ 
    
    
    header("location:encuestaFormulario.php?error=si");
    
}
else
{
	
        
    header("location:encuestaFormulario.php");
   
}


?>
