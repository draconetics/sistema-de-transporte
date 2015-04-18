<?PHP 
	$nombrecliente=$_POST["nombrecliente"];
	$apellidocliente=$_POST["apellidocliente"];
	$ci=$_POST["ci"];

	$idtipo=$_POST["idtipo"];
//$telefonocliente=$_POST["telefonocliente"];
//$celularcliente=$_POST["celularcliente"];
	include("php_conexion.php");
		

	$sql="INSERT INTO `transporte`.`cliente` (`idcliente`, `nombrecliente`, `apellidocliente`,`ci` ,`idtipo`) 
	VALUES (NULL, '$nombrecliente', '$apellidocliente','$ci', '$idtipo');
	";

	mysql_query($sql,$conexion); 

	echo '<script language = javascript>alert("Los datos se registraron Correctamente")</script>';
	echo '<script>window.location.href="clientes.php"</script>';

?>
