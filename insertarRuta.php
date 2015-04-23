<?PHP 
	$inidetalle=$_POST["inidetalle"];
	$findetalle=$_POST["findetalle"];

	$inilat=$_POST["inilat"];
	$inilong=$_POST["inilong"];
	$ini = $inilat."/".$inilong;

echo "estos son los datos";
echo $inidetalle."<br>";
echo $findetalle."<br>";


	$finlat=$_POST["finlat"];
	$finlong=$_POST["finlong"];
	$fin = $finlat."/".$finlong;


echo $ini."<br>";
echo $fin;
//$ci=$_POST["ci"];
//$telefonocliente=$_POST["telefonocliente"];
//$celularcliente=$_POST["celularcliente"];
	include("php_conexion.php");
		

	$sql="INSERT INTO `ruta` (`paradaInicial`,`descripcioninicial`,`paradafinal`,`descripcionfinal`,`idautobus`) 
	VALUES ('$ini', '$inidetalle','$fin','$findetalle',1);
	";

	mysql_query($sql,$conexion); 

	echo '<script language = javascript>alert("Los datos se registraron Correctamente")</script>';
	echo '<script>window.location.href="ruta_inicio.php"</script>';

?>
