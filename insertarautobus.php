<?	
		$placa=$_POST["placa"];
	$capacida=$_POST["capacidad"];
	
	include("php_conexion.php");
		

	$sql="INSERT INTO `transporte`.`autobus` (`idautobus`, `placa`, `capacidad`) 
	VALUES (NULL, '$idautobus', '$placa', '$capacidad');
	";

	mysql_query($sql,$conexion); 

	echo '<script language = javascript>alert("Los datos se registraron Correctamente")</script>';
	echo '<script>window.location.href="conductor.php"</script>';

?>
