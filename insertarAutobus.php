<?PHP 
	$placa=$_POST["placa"];
	$estado=$_POST["estado"];

	include("php_conexion.php");
		

	$sql="INSERT INTO `autobus` (`placa`,`estado`) 
	VALUES ('$placa', '$estado');
	";

	mysql_query($sql,$conexion); 

	echo '<script language = javascript>alert("Los datos se registraron Correctamente")</script>';
	echo '<script>window.location.href="clientes.php"</script>';

?>
