
<?php
session_start();
$connect = new mysqli("localhost","sspmc","eevnw2nn","Firmas");

if($connect){
	 
}else{
	echo "Fallo, revise ip o firewall";
	exit();
}


?>