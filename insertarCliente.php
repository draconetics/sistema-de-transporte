<?PHP 
	$nombrecliente=$_POST["nombrecliente"];
	$apellidocliente=$_POST["apellidocliente"];
	$tipocliente=$_POST["tipocliente"];
//$ci=$_POST["ci"];
//$telefonocliente=$_POST["telefonocliente"];
//$celularcliente=$_POST["celularcliente"];
	include("php_conexion.php");
		

	$sql="INSERT INTO `transporte`.`cliente` (`idcliente`, `nombrecliente`, `apellidocliente`,`tipocliente`) 
	VALUES (NULL, '$nombrecliente', '$apellidocliente', '$tipocliente');
	";

	mysql_query($sql,$conexion); 

	echo '<script language = javascript>alert("Los datos se registraron Correctamente")</script>';
	echo '<script>window.location.href="clientes.php"</script>';

?>