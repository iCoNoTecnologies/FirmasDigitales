<?php


include 'conexion.php';
$email="";
$pass="";



if(isset($_POST["email"])&& isset($_POST['pass'])){
$email=$_POST["email"];
$pass=$_POST['pass'];

$queryResult=$connect->query("SELECT * FROM usuarios where correo='".$email."'");

$result=array();

while($fetchData=$queryResult->fetch_assoc()){
	$result[]=$fetchData;
}


if(mysqli_num_rows($queryResult)>0){

     session_start();
	
	 $_SESSION['usuario']=$email;

	  echo "has logeado con el usuario temporal ".$_SESSION['usuario'];
	  header("Location: http://localhost/FirmasDigitales/FirmasDigitales.php");
	 
}



}

?>