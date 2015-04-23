<?PHP 

$idruta=$_POST["idruta"];
$idconductor=$_POST["idconductor"];
$idautobus=$_POST["idautobus"];
$fechapartida=$_POST["fechapartida"];
$horapartida=$_POST["horapartida"];


include("php_conexion.php");
		

	$sql="INSERT INTO `transporte`.`detalledeviaje` (`iddetalle`, `idruta`, `idconductor`, `idautobus`, `fechapartida`, `horapartida`) 
	VALUES (NULL, '$idruta', '$idconductor', '$idautobus', '$fechapartida', '$horapartida');
";

mysql_query($sql,$conexion); 


echo '<script language = javascript>
alert("Los datos se registraron Correctamente")

</script>';


	
echo '<script>window.location.href="servicios.php"</script>';




?>
