<?php
 session_start();

if(isset($_SESSION['usuario'])){

 echo "Bienvenido:".$_SESSION['usuario'];

}else{
	echo("debes iniciar secion primero");
	 header("Location: http://localhost/FirmasDigitales/");
}


?>

<?php
  function accion(){
  
    session_destroy();

  //header( "refresh:1;url=index.php" );
	

  }
 
?>
<html>
<head>
	

</head>
<body>


<input type="submit" name="" value="cerrar sesion" id="boton1" onclick = "funcion();">
<script>
	 var yes = document.getElementById("boton1");
  function funcion(){
  	 
  
    document.write('<?php  accion();  ?>');


  
  }
</script>

</body>	

</html>