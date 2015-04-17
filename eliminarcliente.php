<?PHP 

	$idcliente=$_GET["idcliente"];

	include("bd/coneccion.php");	

	$sql="DELETE FROM `sispeluqueriafinal`.`cliente` WHERE `cliente`.`idcliente` ='$idcliente';";

	mysql_query($sql,$con); 


	echo '<script language = javascript>
		alert("Los datos se Eliminaron Correctamente")

	</script>';
	
	echo '<script>window.location.href="clientes.php"</script>';

?>
