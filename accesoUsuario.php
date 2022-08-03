<?php 


$usuario = $_POST['usuario_txt'];
$password = $_POST['password_txt'];

require "conexion.php";
$objConexion=conectarse();

$sql="select * from  usuarios where documento='$usuario' AND password = '$password'";
$resultado = $objConexion->query($sql);
$existe=$resultado->num_rows;

if($existe==1)
{
	$usuario=$resultado->fetch_object();
	
	session_start();
    $_SESSION["autentificado"]=true;
    $_SESSION ['user']=$usuario->documento;
    
    
    header("location:principal.php");
}
else
{
header("location:index.php?error=si");	
}
?>