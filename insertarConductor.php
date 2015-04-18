<?PHP 
	$idConductor=$_POST["idconductor"];
	$nombre=$_POST["nombre"];
	$apellidos=$_POST["apellidos"];
	$ci=$_POST["ci"];
	$idautobus=$_POST["idautobus"];
	$fechaemision=$_POST["fechaemision"];
	$fechacaducidad=$_POST["fechacaducidad"];
	$categoriaLicencia=$_POST["categorialicencia"];
	$edad=$_POST["edad"];

	include("php_conexion.php");
		

	$sql="INSERT INTO `transporte`.`conductor` (`idconductor`, `nombre`, `apellidos`,`ci`, `idautobus`, `fechaemision`, `fechacaducidad`,`categorialicencia`, `edad`) 
	VALUES (NULL, '$idconductor', '$nombre', '$apellidos', '$ci', '$idautobus');'$fechaemision', '$fechacaducidad','$categorialicencia', '$edad'
	";

	mysql_query($sql,$conexion); 

	echo '<script language = javascript>alert("Los datos se registraron Correctamente")</script>';
	echo '<script>window.location.href="conductor.php"</script>';

?>
