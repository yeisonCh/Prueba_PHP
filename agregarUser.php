<?php 


$usuario = $_POST['usuario_txt'];
$password = $_POST['password_txt'];

require "conexion.php";
$objConexion=conectarse();

$sql="select * from  usuarios where documento='$usuario' AND password = '$password'";
$resultado = $objConexion->query($sql);
$existe=$resultado->num_rows;

if($existe==0)
{ 
    $sql= "INSERT INTO usuarios SET documento='$usuario', password='$password'";
	$resultado = $objConexion->query($sql);
    
    header("location:usuarioFormulario.php?error=si");
    
}
else
{
	
        
    header("location:usuarioFormulario.php?error=ex");
   
}
?>
