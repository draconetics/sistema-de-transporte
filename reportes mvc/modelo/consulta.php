
<?php 

	require "../conexion/conexion.php";
	class consulta{
		var $conn;
		var $conexion;
		function consulta(){		
			$this->conexion= new  Conexion();				
			$this->conn=$this->conexion->conectarse();
		}	
		//-----------------------------------------------------------------------------------------------------------------------
		function registrarUsuario($nombres, $apellidos, $telefono, $ciudad){
			$exito="";
			$sql_insert="insert into usuarios (nombres, apellidos, telefono, ciudad) values ('".$nombres."','".$apellidos."','".$telefono."','".$ciudad."')";
			$rs=mysqli_query($this->conn,$sql_insert) or die(mysql_error());
			if($rs){
				$exito="Registro exitoso";
			}
			return $exito;
		}		
		//-----------------------------------------------------------------------------------------------------------------------
		function reportePdfUsuarios(){			
			$html="";
			$sql="select * from usuarios order by codigo";
			$rs=mysqli_query($this->conn,$sql);
			$i=0;

			$html=$html.'<div align="center">
			Reporte de usuarios registrados en la Base de Datos.
			<br /><br />			
			<table border="0" bordercolor="#0000CC" bordercolordark="#FF0000">';	
			$html=$html.'<tr bgcolor="#FF0000"><td><font color="#FFFFFF">C&oacute;digo</font></td><td><font color="#FFFFFF">Nombres</font></td><td><font color="#FFFFFF">Apellidos</font></td><td><font color="#FFFFFF">Tel&eacute;fono</font></td><td><font color="#FFFFFF">Ciudad</font></td></tr>';
			while ($row = mysqli_fetch_array($rs)){
				if($i%2==0){
					$html=  $html.'<tr bgcolor="#95B1CE">';
				}else{
					$html=$html.'<tr>';
				}
				$html = $html.'<td>';
				$html = $html. $row["codigo"];
				$html = $html.'</td><td>';
				$html = $html. $row["nombres"];
				$html = $html.'</td><td>';
				$html = $html. $row["apellidos"];
				$html = $html.'</td><td>';
				$html = $html. $row["telefono"];
				$html = $html.'</td><td>';
				$html = $html. $row["ciudad"];
				$html = $html.'</td></tr>';		
				$i++;
			}			
			$html=$html.'</table></div>';			
     		 return ($html);
		}
		//-----------------------------------------------------------------------------------------------------------------------		
	}

?>

