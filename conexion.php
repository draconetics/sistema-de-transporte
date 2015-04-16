<?php
$con = mysql_connect("localhost", "root", "");

if (!$con) {
    die("Error: " . mysql_error());
}

mysql_select_db("transporte", $con);

function limpiar($tags){
		$tags = strip_tags($tags);
		$tags = stripslashes($tags);
		$tags = htmlentities($tags);
		$tags = mysql_real_escape_string($tags);
		return $tags;
	}


?>
