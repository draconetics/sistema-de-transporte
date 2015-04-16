<?PHP 

$nombrecliente=$_POST["nombrecliente"];
$ci=$_POST["ci"];
$tipocliente=$_POST["tipocliente"];


include("bd/coneccion.php");
		

	$sql="INSERT INTO `sistematransporte`.`cliente` (`idcliente`, `nombrecliente`, `ci`) 
	VALUES (NULL, '$nombrecliente', '$ci');
";

mysql_query($sql,$con); 


echo '<script language = javascript>alert("Los datos se registraron Correctamente")</script>';
	
echo '<script>window.location.href="clientes.php"</script>';




?>
