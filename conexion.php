<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "inicio_datos";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) 
{
	die("No hay conexión: ".mysqli_connect_error());
}
$nombre = $_POST["usuario"];
$pass = $_POST["contraseña"];

if(isset($_POST["boton"]))
{
$query = mysqli_query($conn,"SELECT * FROM login WHERE usuario = '".$nombre."' and contraseña = '".$pass."'");
$nr = mysqli_num_rows($query);
if($nr == 1)
{
	//echo "<script> alert ('bienvenido');window.Location='index.php'</script>";
	header("Location:index.html");
        
}
else if ($nr == 0) 
{
	//header("Location: login.html");
	echo "<div style='color:red'>Usuario o contraseña invalido </div>";
	header("Location:login.html");
	
	//echo "No ingreso"; 
	
}
}
?>