<?php
include("php_conexion.php");

$result = mysql_query("SELECT * FROM cliente order by idcliente ASC");
//$result2 = mysql_query("SELECT * FROM detalle order by iddetalle ASC");
$result2 = mysql_query("SELECT  detalle.iddetalle, empleado.nombreempleado, cliente.nombrecliente, servicio.nombreservicio, producto.nombre, detalle.fechadetalle, detalle.costoadicional 
						FROM detalle, empleado, cliente, producto, servicio 
						WHERE (detalle.idempleado = empleado.idempleado) AND (detalle.idcliente = cliente.idcliente) AND (detalle.idservicio = servicio.idservicio) AND (detalle.idproducto = producto.idproducto)");
						

//$result3 = mysql_query("SELECT  SUM(costocli) as total FROM detalle ");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		<title>Blanco</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		
		<!-- Le styles -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/bootstrap-responsive.css" rel="stylesheet">
		<link href="css/docs.css" rel="stylesheet">
		<link href="js/google-code-prettify/prettify.css" rel="stylesheet">
		<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap-transition.js"></script>
		<script src="js/bootstrap-alert.js"></script>
		<script src="js/bootstrap-modal.js"></script>
		<script src="js/bootstrap-dropdown.js"></script>
		<script src="js/bootstrap-scrollspy.js"></script>
		<script src="js/bootstrap-tab.js"></script>
		<script src="js/bootstrap-tooltip.js"></script>
		<script src="js/bootstrap-popover.js"></script>
		<script src="js/bootstrap-button.js"></script>
		<script src="js/bootstrap-collapse.js"></script>
		<script src="js/bootstrap-carousel.js"></script>
		<script src="js/bootstrap-typeahead.js"></script>
		<script src="js/bootstrap-affix.js"></script>
		<script src="js/holder/holder.js"></script>
		<script src="js/google-code-prettify/prettify.js"></script>
		<script src="js/application.js"></script>
		
        <script src="media/js/jquery.js" type="text/javascript"></script>
        <script src="media/js/jquery.dataTables.js" type="text/javascript"></script>
        
        <style type="text/css">
            @import "media/css/demo_table_jui.css";
            @import "media/themes/smoothness/jquery-ui-1.8.4.custom.css";
        </style>
        
        <style>
            *{
                font-family: arial;
            }
        </style>
		
		
        <script type="text/javascript" charset="utf-8">
            $(document).ready(function(){
                $('#datatables').dataTable({
                    
                    "aaSorting":[[2, "desc"]],
                    "bJQueryUI":true
                });
            })
            
        </script>
		
		<script type="text/javascript" charset="utf-8">
            $(document).ready(function(){
                $('#datatables2').dataTable({

                    "aaSorting":[[2, "asc"]],
                    "bJQueryUI":true
                });
            })
            
        </script>
		
			<!--------------CALENDARIO----------->

		<link rel="stylesheet" href="calendario/js/jquery.ui.all.css">
		<!---<script src="js/jquery-1.6.2.js"></script>--->
		<script src="calendario/js/jquery.ui.core.js"></script>
		<script src="calendario/js/jquery.ui.widget.js"></script>
		<script src="calendario/js/jquery.ui.datepicker.js"></script>
		<!--<script src="js/jquery.ui.datepicker1.js"></script>-->
		<link rel="stylesheet" href="calendario/js/demos.css">
		<script>
		$(function() {
			$( "#datepicker" ).datepicker();
			$( "#datepicker2" ).datepicker();
			$( "#datepicker3" ).datepicker();
			$( "#datepicker4" ).datepicker();
			$( "#datepicker5" ).datepicker();
			$( "#datepicker6" ).datepicker();
			$( "#datepicker7" ).datepicker();
			$( "#datepicker8" ).datepicker();
			$( "#datepicker9" ).datepicker();
		
		});
	
		</script>

		<!-------------fin de calendario--------->
		
		<!-- Le fav and touch icons -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
		<link rel="shortcut icon" href="assets/ico/favicon.png">
        
    </head>
    
	<body>
	
		<div align="center">
			<table width="95%" border="0">
				<tr height="50px">
					<td colspan="2px">
						<table class="table table-bordered">
							<tr class="success">
								<td>
									<div class="row-fluid">
										<div class="span6">
											<h3><img src="img/icono_alumno.jpg" class="img-circle img-polaroid" width="70" height="65"> 
											Control & servicios al Clientes</h3>
										</div>
										<div class="span6">
											<div align="right">
											<br><br><br>
												<a href="limpiarServicio.php" class="btn btn-warning"><strong><i class="icon-leaf"></i>Limpiar Registro</strong></a>
												<a href="#nuevo" role="button" class="btn btn-success" data-toggle="modal">
													<strong><i class="icon-ok"></i>Costo Total del Servicio</strong>
												</a>                
                        
											</div>
										</div>
									</div>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td>
						<table border="0" width="650px">
							<tr>
								<td>
									<table id="datatables" class="display">
										<thead>
											<tr class="Eliminar">
												<th>Nombre Del Cliente</th>        
												<th>Apellido del Cliente</th>
												<th>Servicios</th>
											</tr>
										</thead>
									<tbody>
										<?php
											while ($row = mysql_fetch_array($result)) {
										?>
										<tr>
						
											<td><?php
												$idcliente=$row['idcliente'];
												$nombrecliente=$row['nombrecliente'];
												echo  $nombrecliente;
											?> </td>
							
											<td><?php
												$apellidocliente=$row['apellidocliente'];
												echo $apellidocliente;
											?></td>
                         									
											<th>
												<a href="#actualizar<?php echo $row['idcliente']; ?>" role="button" class="btn btn-mini" data-toggle="modal" title="Agregar Servicio">
													<i class="icon-plus"></i>
												</a>
											</th>			
										</tr>
		
										<!--servicio cliente-->
										<div id="actualizar<?php echo $row['idcliente']; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											<form name="form2" method="post" enctype="multipart/form-data" action="insertarServicio_cliente.php">
												<input type="hidden" name="idcliente" value="<?php echo $row['idcliente']; ?>">
												<div class="modal-header">
													
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
													<h3 id="myModalLabel">Agregar Servicio Realizado</h3>
												</div>
												<div class="modal-body">
													<div class="row-fluid">
														<div class="span6">
															<strong>Nombre del Cliente</strong><br>
															<select name="idcliente">
																<?php
																	echo '<option value="'.$row['idcliente'].'">'.$row['nombrecliente'].'</option>';
																?>                                     
															</select>
															<strong>Apellido del Cliente</strong><br>
															<input type="text" name="apellidocliente" autocomplete="off" disabled=true value="<?php echo $row['apellidocliente']; ?>"><br>    
															<strong>Tipo de Cliente</strong><br>
															<input type="text" name="tipocliente" autocomplete="off" disabled=true value="<?php echo $row['tipocliente']; ?>"><br>											
														</div>				
														<div class="span6">
															<strong>Fecha de Servicio</strong><br>
															<input type="date" name="fechadetalle" autocomplete="off" required value="<?php echo date('Y-m-d'); ?>"><br>
															<strong>Tipo de Tarjeta</strong><br>
															<select name="idtarjeta">
															<?php
																$c=mysql_query("SELECT * FROM tarjeta");
																while($d=mysql_fetch_array($c)){
																	echo '<option value="'.$d['idtarjeta'].'">'.$d['nombretarjeta'].'</option>';
																}
															?>                                     
															</select><br>
															<strong>Saldo de la Tarjeta</strong><br>
															<input type="number" name="saldo" required><br><br>
															<center><br><button type="submit" class="btn btn-primary"><strong><i class="icon-ok"></i>Agregar Servicio</strong></button></center>
														</div>
													</div>
												</div>
												<div class="modal-footer">
													<button class="btn" data-dismiss="modal" aria-hidden="true"><strong><i class="icon-remove"></i> Cerrar</strong></button>
												</div>
											</form>
										</div>
										<?php } ?>
										</tbody>
									</table>
								</td>
							</tr>
						</table>
					</td>
					<td>
						<table border="0" width="900px">
							<tr>
								<td>
									<table id="datatables2" class="display">
										<thead>
											<tr class="Eliminar">
												<th>Nombre Del Trabajador</th>                   
												<th>Nombre Del Cliente</th>
												<th>Servicio</th>
												<th>Producto</th>
												<th>fecha</th>
												<th>Costo</th>
												<th>Eliminar</th>
											</tr>				 
										</thead>
									<tbody>
										<?php
											while ($row2 = mysql_fetch_array($result2)) {
										?>
										<tr>										
											<td><?php
												$iddetalle=$row2['iddetalle'];
												$nombreempleado=$row2['nombreempleado'];
												echo  $nombreempleado;
											?> </td>
							
											<td><?php
												$nombrecliente=$row2['nombrecliente'];
												echo $nombrecliente;
											?></td>
											<td><?php
												$nombreservicio=$row2['nombreservicio'];
												echo $nombreservicio;
											?></td>
											<td><?php
												$nombre=$row2['nombre'];
												echo $nombre;
											?></td>
                         					<td><?php
												$fechadetalle=$row2['fechadetalle'];
												echo $fechadetalle;
											?></td>
											
											<td><?php
												$costoadicional=$row2['costoadicional'];
												echo $costoadicional;
											?></td>
											<td class="center"><?php
												echo '<a href="eliminarServicio_cliente.php?iddetalle='.$row2['iddetalle'].'" role="button" class="btn btn-mini" data-toggle="modal" title="Eliminar"><i class="icon-minus"></i></a> ';	
											?>
											</td>			
										</tr>
										<?php } ?>
										</tbody>
									</table>
								</td>
							</tr>
						</table>	
					</td>
				</tr>
			</table>	
		</div>
		<!--crear nuevo -->
		<div id="nuevo" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<form name="form2" method="post" enctype="multipart/form-data" action="prueba_total.php">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 id="myModalLabel">Costo Total del Servicio al Cliente</h3>
				</div><br>
				<div align="center"><font size=6>
				 <?php
				//***** Calculo del costo por medio de una sentencia mysql ****
				$result3 = mysql_query("SELECT  SUM(costoadicional)+SUM(DISTINCT costoservicio) as costo 
										FROM detalle, servicio 
										WHERE detalle.idservicio = servicio.idservicio ");
				
				if ($row3 = mysql_fetch_array($result3)){

					//echo "<table border = '1'> \n";
					echo "<tr> \n";
					//echo "<td><b>Gastos</b></td> \n";
					echo "</tr> \n";
					do {

						//echo "<tr> \n";

						echo "<td>".$row3["costo"]."</td>  Bs." ;

						//echo "</tr> \n";

					} while ($row3 = mysql_fetch_array($result3));

						echo "</table> \n";

				} else {

					echo "� La base de datos est� vacia !";

				}

				?>
				</font>
				</div>				
				<div> <?echo $row_gastos['nombre del campo']; ?> </div>
				<div class="modal-footer">
					<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true"><strong><i class="icon-remove"></i> Cerrar</strong></button>
				</div>
			</form>
		</div>
	</body>
</html>