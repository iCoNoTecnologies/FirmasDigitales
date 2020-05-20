<?php
 session_start();

$nombre_user="";

if(isset($_SESSION['usuario'])){

 $nombre_user="Bienvenido:\n ".$_SESSION['usuario'];

}else{
	echo("debes iniciar secion primero");
	 header("Location: http://localhost/FirmasDigitales/");
}


?>

<?php
  function cerrar_sesion(){
  
    session_destroy();


	

  }


  
 
?>
<html lang="en">
  <head>
  	<title>Firmas Digitales</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
 
        


  <style type="text/css">
  	
.Fondo {
    width: 100%;
    min-height: 100vh;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    justify-content: left;
    align-items: left;
    padding: 1px;
    background: #9053c7;
    background: -webkit-linear-gradient(-135deg, #c850c0, #4158d0);
    background: -o-linear-gradient(-135deg, #c850c0, #4158d0);
    background: -moz-linear-gradient(-135deg, #c850c0, #4158d0);
    background: linear-gradient(-135deg, #c850c0, #4158d0);
}

  </style>
  <script >
  	  $(document).ready(function(){
	    		$('#C_documentos_firmados').click(function(){
	       		$("#contenido").load("menu/documentos_firmados.php");
	    									 });


	    		$('#C_documentos_recividos').click(function(){
	       		$("#contenido").load("menu/documentos_recibidos.php");
	    									 });

	    		$('#C_inicio').click(function(){
	       		$("#contenido").load("menu/page_inicio.php");
	    									 });

	    		$("#contenido").load("page_inicio.php");
                        
										});

  </script> 
   <script>
	  var yes = document.getElementById("boton1");

      function cerrarSesion(){
  	 
  
          document.write('<?php  cerrar_sesion();  ?>');
 

  
      }
       
       
     
     

      </script>
  <body>
		<div class="Fondo">  

		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">
	  			<div class="user-logo">
	  				<div class="img" style="background-image: url(images/logo.jpg);"></div>
	  				<h3><?php echo($nombre_user);?></h3>
	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="#" id="C_inicio"><span class="fa fa-home mr-3"></span> Inicio</a>
          </li>
          <li>
              <a href="#" id="C_documentos_firmados"><span class="fa fa-download mr-3 notif"><small class="d-flex align-items-center justify-content-center">5</small></span> Documentos Firmados</a>
          </li>
          <li>
            <a href="#" id="C_documentos_recividos"><span class="fa fa-gift mr-3"></span> Documentos Recibidos</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-cog mr-3"></span> Configuracion de Firmas</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-support mr-3"></span> Soporte</a>
          </li>
          <li>
            <a onclick = "cerrarSesion();" ><span class="fa fa-sign-out mr-3"></span> Cerrar Sesion 1</a>

          </li>
        </ul>

    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
       
       <table  border="1">
			<tr>
				
				<td >

                   <div id ="#contenido"></div>

				</td>
			</tr>
		</table>

      </div>

		</div>



 </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>


  </body>
</html>

