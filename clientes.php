<?php
	include("php_conexion.php");

	$result = mysql_query("SELECT * FROM cliente order by idcliente ASC");
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
                        	Registro & Control de Clientes</h3>
                      </div>
                      <div class="span6">
                      	<div align="right">
						<br><br><br>
							<a href="#nuevo" role="button" class="btn btn-info" data-toggle="modal">
                            	<strong><i class="icon-user"></i> Agregar Nuevo Cliente</strong>
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
                        <th>Nombre Del Cliente</th>
                        <th>Apellido del Cliente</th>
                        <th>Tipo de Cliente</th>

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
							<td><?php
								$tipocliente=$row['tipocliente'];
								echo $tipocliente;
							?></td>
                        </tr>
					<?php } ?>
            </table>
        </td>
      </tr>
    </table>
</div>
	  
		<!--crear nuevo alumno-->
<div id="nuevo" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form name="form2" method="post" enctype="multipart/form-data" action="insertarCliente.php">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
		<h3 id="myModalLabel">Ingresar Nuevo Cliente</h3>
	</div>
	<div class="modal-body">
		<div class="row-fluid">
        	<div class="span6">
            	<strong>Nombre del Cliente</strong><br>
            	<input type="text" name="nombrecliente" autocomplete="off" required><br>
                <strong>Apellido del Cliente</strong><br>
				<input type="text" name="apellidocliente" autocomplete="off" required><br>            
            </div>
            <div class="span6">
            	<strong>Tipo de Cliente</strong><br>
                                                            <select name="idtipo">
                                                            <?php
                                                                $c=mysql_query("SELECT * FROM tipocliente");
                                                                while($d=mysql_fetch_array($c)){
                                                                    echo '<option value="'.$d['idtipo'].'">'.$d['nombretipo'].'</option>';
                                                                }
                                                            ?>                                     
                                                            </select><br>
				<center><button type="submit" class="btn btn-primary"><strong><i class="icon-ok"></i> Agregar Cliente</strong></button></center>
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