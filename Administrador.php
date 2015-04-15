<?php
		session_start();
		include('php_conexion.php'); 
		if($_SESSION['tipo_usu']=='a'){
		}else{
			header('location:error.php');
		}
		if($_SESSION['tipo_usu']=='a'){
			$titulo='Administrador';
		}else{
			$titulo='Secretaria/o';
		}
		$usuario=limpiar($_SESSION['username']);
		$sqll=mysql_query("SELECT * FROM usuario WHERE loginusuario='$usuario'");
		if($dato=mysql_fetch_array($sqll)){
			$nombre=$dato['nombreusuario'];
			$palabra=explode(" ", $nombre);
			$nomb=$palabra[0];
		}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $titulo; ?></title>
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

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="ico/favicon.png">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
body {
	background-color: #FFF;
	background-image: url(img/fondoP.png);
}
</style>
</head>
<body data-spy="scroll" data-target=".bs-docs-sidebar">
<div align="center">
<table width="98%" border="0">
  <tr>
    <td>
    <div id="navbar-example" class="navbar navbar-static">
      <div class="navbar-inner">
        <div class="container" style="width: auto;">
          <a class="brand" href="inicio.php" target="admin"><?php echo $titulo; ?></a>
          <ul class="nav" role="navigation">
            <li class="dropdown">
              <a id="drop1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Registros <b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
				<li role="presentation"><a role="menuitem" tabindex="-1" href="clientes.php" target="admin"><i class="icon-user"></i> Clientes</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="productos.php" target="admin"><i class="icon-tags"></i> Productos</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="servicios.php" target="admin"><i class="icon-wrench"></i> Servicios</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="trabajadores.php" target="admin"><i class="icon-user"></i> Trabajadores</a></li>
                
				<!--<li role="presentation" class="divider"></li>-->  
              </ul>
            </li>
			
			<li class="dropdown">
              <a href="#" id="drop2" role="button" class="dropdown-toggle" data-toggle="dropdown">Cobrar Servicios <b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
				<li role="presentation"><a role="menuitem" tabindex="-1" href="servicios_cliente.php" target="admin"><i class="icon-fire"></i> 
                Servicio al Cliente</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown">Reportes <b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
				<li role="presentation"><a role="menuitem" tabindex="-1" href="r_alumnos.php" target="admin"><i class="icon-th-list"></i> 
                Listado de Alumnos</a></li>
				<li role="presentation"><a role="menuitem" tabindex="-1" href="reporteServicio.php" target="admin"><i class="icon-th-list"></i> 
                Listado de Fechas</a></li>
				<li role="presentation"><a role="menuitem" tabindex="-1" href="reporte.php" target="admin"><i class="icon-th-list"></i> 
                Listado de Trabajadores</a></li>
				<li role="presentation"><a role="menuitem" tabindex="-1" href="reporte2.php" target="admin"><i class="icon-th-list"></i> 
                Listado</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav pull-right">
            <li id="fat-menu" class="dropdown">
              <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i> Hola! <?php echo $nomb; ?> <b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
              	<li role="presentation"><a role="menuitem" tabindex="-1" href="bd.php" target="admin"><i class="icon-refresh"></i> Iniciar BD</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="cambiar_clave.php" target="admin"><i class="icon-refresh"></i> Cambiar Contraseña</a></li>
                <li role="presentation" class="divider"></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="php_cerrar.php"><i class="icon-off"></i> Salir</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
    </td>
  </tr>
  <tr>
    <td><iframe src="inicio.php" frameborder="0" scrolling="yes" name="admin" width="100%" height="600"></iframe></td>
  </tr>
  <tr>
    <td>
    <pre><center><strong><a href="https://www.facebook.com/arielmsm" target="_blank" style="color:#000">Digital Sis - Todos Derechos Reservados -</a></strong></center></pre>
    </td>
  </tr>
</table>
</body>
</html>