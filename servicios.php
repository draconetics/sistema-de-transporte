<?php
include("php_conexion.php");

$result = mysql_query("SELECT detalledeviaje.iddetalle, detalledeviaje.fechapartida, detalledeviaje.horapartida, ruta.iniciopartida, 
                              ruta.finpartida, conductor.nombreconductor,  autobus.placa  
                            FROM detalledeviaje, ruta, conductor, autobus
                            where detalledeviaje.idruta = ruta.idruta and
                                    detalledeviaje.idconductor = conductor.idconductor and 
                                    detalledeviaje.idautobus =  autobus.idautobus");
?>


<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
		<title>Blanco</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
        <link rel="stylesheet" type="text/css" href="./jquery.datetimepicker.css"/>
        
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
                    "sPaginationType":"full_numbers",
                    "aaSorting":[[2, "desc"]],
                    "bJQueryUI":true
                });
            })

            
        </script>
	

    <link rel="stylesheet" href="calendario/js/jquery.ui.all.css">
   
    <script src="calendario/js/jquery.ui.core.js"></script>
    <script src="calendario/js/jquery.ui.widget.js"></script>
    <script src="calendario/js/jquery.ui.datepicker.js"></script>
  
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
      <tr>
        <td>
       	  <table class="table table-bordered">
              <tr class="success">
                <td>
                    <div class="row-fluid">
                      <div class="span6">
                        	<h3><img src="img/ser.jpg" class="img-circle img-polaroid" width="70" height="65"> 
                        	Administracion & Control de Detalle de Viajes</h3>
                      </div>
                      <div class="span6">
                      	<div align="right">
						<br><br><br>
                       	<a href="#nuevo" role="button" class="btn btn-info" data-toggle="modal">
                            	<strong><i class="icon-wrench"></i>Agregar Nuevo Viaje</strong>
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
	
	
        <div>
            <table id="datatables" class="display">
                <thead>
                    <tr>
                        <th>Fecha de Partida</th>
                        <th>Hora de Partida</th>
                        <th>Lugar de Partida</th>
                        <th>Lugar de Llegada</th>
                        <th>Nombre de Conductor</th>
						<th>Placa del Bus</th>
                        <th>Editar</th>
                        
                    </tr>
                </thead>
                <tbody>

                <?php  while ($row = mysql_fetch_array($result)) {
                        ?>
                        <tr>
						
                            <td><?php
								$iddetalle=$row['iddetalle'];
								$fechapartida=$row['fechapartida'];
								echo  $fechapartida;?> </td>

                            <td><?php
                                $iddetalle=$row['iddetalle'];
                                $horapartida=$row['horapartida'];
                                echo  $horapartida;?> </td>
                            							
							<td><?php
							$iniciopartida=$row['iniciopartida'];
							echo $iniciopartida;?></td>
							
                            <td><?php
                            $finpartida=$row['finpartida'];
                            echo $finpartida;?></td>

                            <td><?php
                            $nombreconductor=$row['nombreconductor'];
                            echo $nombreconductor;?></td>

                            <td><?php
                            $placa=$row['placa'];
                            echo $placa;?></td>
							
                            <th>
								<a href="#actualizar<?php echo $row['iddetalle']; ?>" role="button" class="btn btn-mini" data-toggle="modal" title="Actualizar gil">
									<i class="icon-edit"></i>
								</a>
							</th>	
							
                            <!--<td class="center"><?php
							echo '<a href="eliminarProducto.php?idservicio='.$row['idservicio'].'  "><img src="img/eliminar.png"></a> ';
							
							?> -->
							</td>
                        </tr>
		
					<!--actualizar servicio-->
                    <div id="actualizar<?php echo $row['iddetalle']; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				    <form name="form2" method="post" enctype="multipart/form-data" action="actualizarServicio.php">
                    	<input type="hidden" name="iddetalle" value="<?php echo $row['iddetalle']; ?>">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                            <h3 id="myModalLabel">Actualizar Servicio</h3>
                        </div>
                        <div class="modal-body">
                            <div class="row-fluid">
                                <div class="span6">
                                								
        			               
                                    <strong>fecha de partida</strong><br>
                                        <input type="text" id= "datapicker3" name="fechapartida" autocomplete="off" required value="<?php echo $row['fechapartida']; ?>"><br>
                                    <strong>hora de partida</strong><br>
                                        <input type="time" name="horapartida" autocomplete="off" required value="<?php echo $row['horapartida']; ?>"><br>
                                    <strong>Ruta del Viaje</strong><br>
                                        <select name="idruta">
                                         <?php
                                        $c=mysql_query("SELECT * FROM ruta");
                                        while($d=mysql_fetch_array($c)){
                                            echo '<option value="'.$d['idruta'].'">'.$d['iniciopartida']." ".$d['finpartida'].'</option>';
                                        }
                                        ?>                                     
                                        </select><br>
                                    <strong>conductor</strong><br>
                                        <select name="idconductor">
                                         <?php
                                        $c=mysql_query("SELECT * FROM conductor");
                                        while($d=mysql_fetch_array($c)){
                                            echo '<option value="'.$d['idconductor'].'">'.$d['nombreconductor']." ".$d['apellidoconductor'].'</option>';
                                        }
                                        ?>                                     
                                        </select><br>
                                   <strong>conductor</strong><br>
                                        <select name="idautobus">
                                         <?php
                                        $c=mysql_query("SELECT * FROM autobus");
                                        while($d=mysql_fetch_array($c)){
                                            echo '<option value="'.$d['idautobus'].'">'.$d['placa'].'</option>';
                                        }
                                        ?>                                     
                                        </select><br>
								
                                </div>
                                    <div class="span6">
                                         <center><button type="submit" class="btn btn-primary"><strong><i class="icon-ok"></i>Actualizar Detalles</strong></button></center>
                                    </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true"><strong><i class="icon-remove"></i> Cerrar</strong></button>
                        </div>
                    </form>
                    </div>

				<?php } ?>
                </table>
        </td>
      </tr>
    </table>
</div>
	  
		<!--crear nuevo servicio // <!--<input type="date" name="fechapartida" /><br><br>--> -->
<div id="nuevo" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form name="form2" method="post" enctype="multipart/form-data" action="insertarDetalleDeViaje.php">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
		<h3 id="myModalLabel">Organizar Nuevo Viaje</h3>
	</div>
	<div class="modal-body">
		<div class="row-fluid">
        	<div class="span6">

            	<strong>fecha de partida</strong><br>
                 <td width="200" ><input type="text" id="datepicker4"  name="fechapartida" /> <img src="img/calendario.png"></br
                
                <strong>hora de partida</strong><br>
                 <input type="time" name="horapartida" /><br><br> 

                <strong>Ruta del Viaje</strong><br>
                        <select name="idruta">
                         <?php
                        $c=mysql_query("SELECT * FROM ruta");
                        while($d=mysql_fetch_array($c)){
                            echo '<option value="'.$d['idruta'].'">'.$d['iniciopartida']." ".$d['finpartida'].'</option>';
                        }
                        ?>                                     
                        </select><br>

                <strong>Conductor</strong><br>
                        <select name="idconductor">
                        <?php
                            $c=mysql_query("SELECT * FROM conductor");
                            while($d=mysql_fetch_array($c)){
                                echo '<option value="'.$d['idconductor'].'">'.$d['nombreconductor']."  ".$d['apellidoconductor'].'</option>';
                            }
                        ?>                                     
                        </select><br>

				</div>
            <div class="span6">
                <strong>Placa de Bus</strong><br>
                        <select name="idautobus">
                        <?php
                            $c=mysql_query("SELECT * FROM autobus");
                            while($d=mysql_fetch_array($c)){
                                echo '<option value="'.$d['idautobus'].'">'.$d['placa'].'</option>';
                            }
                        ?>                                     
                        </select><br>
            	<br><br>
                <center><button type="submit" class="btn btn-primary"><strong><i class="icon-ok"></i>Guardar Cambios</strong></button></center>
            </div>
		</div>
	</div>
  	<div class="modal-footer">
		<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true"><strong><i class="icon-remove"></i> Cerrar</strong></button>
	</div>
    </form>
</div>
</body>

</html>
