<?php
  include("php_conexion.php");

  $result = mysql_query("SELECT * FROM conductor");
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
    <script src="js/bootstrap-tab.js"></script>
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
      <tr>
        <td>
          <table class="table table-bordered">
              <tr class="success">
                <td>
                    <div class="row-fluid">
                      <div class="span6">
                          <h3><img src="img/ser1.png" class="img-circle img-polaroid" width="70" height="65"> 
                          Registro de Conductores</h3>
                      </div>
                      <div class="span6">
                        <div align="right">
            <br><br><br>
              <a href="#nuevo" role="button" class="btn btn-info" data-toggle="modal">
                              <strong><i class="icon-user"></i> Agregar Nuevo Conductor</strong>
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
                    <tr class="Eliminar">
                        <th>idconductor</th>
                        <th>nombre</th>
                        <th>apellidos</th>
						<th>ci</th>
						<th>fechaemision</th>
						<th>fechacaducidad</th>
						<th>categorialicencia</th>
						<th>edad</th>
						

                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysql_fetch_array($result)) {
                        ?>
                        <tr>
            
                            <td><?php
                $idautobus=$row['idautobus'];
                echo  $idautobus;
              ?> </td>
                            <td><?php
                $placa=$row['placa'];
                echo $placa;
              ?></td>
              <td><?php
                $estado=$row['estado'];
                echo $estado;
              ?></td>
                        </tr>
          <?php } ?>
            </table>
        </td>
      </tr>
    </table>
</div>
    
    <!--crear nuevo conductor-->
<div id="nuevo" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form name="form2" method="post" enctype="multipart/form-data" action="insertarAutobus.php">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
    <h3 id="myModalLabel">Ingresar Nuevo Conductor</h3>
  </div>
  <div class="modal-body">
    <div class="row-fluid">
          <div class="span6">
              <strong>Nombre </strong><br>
              <input type="text" name="nombre" autocomplete="off" required><br>
			  <strong>Apellidos </strong><br>
			  <input type="text" name="apellidos" autocomplete="off" required><br>
			  <strong>Ci </strong><br>
			  <input type="text" name="ci" autocomplete="off" required><br>
			  <strong>id Autobus </strong><br>
			  <input type="text" name="idautobus" autocomplete="off" required><br>
              <strong>Fecha Emision </strong><br>
			  <input type="date" id="datepicker9" name="fechaemision" value="<?php echo $row['fechaemision']; ?>"><br>
			  <strong>Fecha Caducidad </strong><br>
			  <input type="date" id="datepicker8" name="fechacaducidad" value="<?php echo $row['fechacaducidad']; ?>"><br>
			  <strong>Categoria Licencia </strong><br>
			  <input type="text" name="categorialicencia" autocomplete="off" required><br>
          	  <strong>Edad </strong><br>
			  <input type="text" name="edad" autocomplete="off" required><br>
          
                      
                                                          
        <center><button type="submit" class="btn btn-primary"><strong><i class="icon-ok"></i>Agregar Conductor</strong></button></center>
            </div>
    </div>
  </div>
    <div class="modal-footer">
    <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true"><strong><i class="icon-remove"></i> Cerrar</strong></button>
  </div>
    </form>
</div>
</body>
</html>
