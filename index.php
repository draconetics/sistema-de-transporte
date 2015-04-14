<?php
		session_start();
		include_once('php_conexion.php'); 
		
		if(!empty($_POST['usuario']) and !empty($_POST['contra'])){
			$usuario=limpiar($_POST['usuario']);
			$contra=limpiar($_POST['contra']);
			$can=mysql_query("SELECT * FROM usuario WHERE (loginusuario='".$usuario."') and claveusuario='".$contra."'");
			if($dato=mysql_fetch_array($can)){
				$_SESSION['username']=$dato['loginusuario'];
				$_SESSION['tipo_usu']=$dato['tipousuario'];
 				
				///////////////////////////////
				if($_SESSION['tipo_usu']=='a'){
					header('location:Administrador.php');
				}
				else if($_SESSION['tipo_usu']=='b'){
					header('location:Vendedor.php');
				}
			}
		}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Entrar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
	padding-top: 40px;
	padding-bottom: 40px;
	background-color: #f5f5f5;
	background-image: url(img/fondoP.png);
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="ico/favicon.png">
  </head>

  <body>

    <div class="container">
      <form name="form1" method="post" action="" class="form-signin">
        <center><h2 class="form-signin-heading">Iniciar Sesión</h2></center>
		<center><img src="img/login.png" alt="" width="80" height="80"></center>
        <input type="text" name="usuario" class="input-block-level" placeholder="Usuario" autocomplete="off" required>
        <input type="password" name="contra" class="input-block-level" placeholder="Contraseña" autocomplete="off" required>
		<center><a href="register.html" class="linkform"> crear nuevo usuario</a></center><br>
        <button class="btn btn-large btn-primary" type="submit">Iniciar</button>
        <p>&nbsp;</p>
<?php
		$act="1";
		if(!empty($_POST['usuario']) and !empty($_POST['contra'])){
			$usuario=limpiar($_POST['usuario']);
			$contra=limpiar($_POST['contra']);
			$can=mysql_query("SELECT * FROM usuario WHERE (loginusuario='".$usuario."') and claveusuario='".$contra."'");
			if(!$dato=mysql_fetch_array($can)){
				if($act=="1"){
					echo '<div class="alert alert-error" align="center"><strong>Usuario y Contraseña Incorrecta</strong></div>';
				}else{
					$act="0";
				}
			}else{
				if($dato['estado']=='n'){
					echo '<div class="alert alert-error" align="center"><strong>Consulte con el Administrador</strong></div>';
				}
			}
		}else{
			
		}
	?>
      </form>
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
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

  </body>
</html>
