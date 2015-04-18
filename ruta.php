<?php
  include("php_conexion.php");

  $result = mysql_query("SELECT * FROM autobus");
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
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script>
var map1;
var map2;

function initialize() {
  var mapOptions = {
    zoom: 12,
    center: new google.maps.LatLng(-17.3940401, -66.1638756)
  };

  

  map1 = new google.maps.Map(document.getElementById('map1'),
      mapOptions);
  map2 = new google.maps.Map(document.getElementById('map2'),
      mapOptions);

  var marker1 = new google.maps.Marker({
    position: map1.getCenter(),
    draggable: true,
    map: map1,
    title: 'Click to zoom'
  });

  document.getElementById("inilat").value = '-17.3940401';
  document.getElementById("inilong").value = '-66.1638756';
  document.getElementById("finlat").value = '-17.3940401';
  document.getElementById("finlong").value = '-66.1638756';


  //alert("entra a mapa");

  var marker2 = new google.maps.Marker({
    position: map2.getCenter(),
    draggable:true,
    map: map2,
    title: 'Click to zoom'
  });

  google.maps.event.addListener(map1, 'center_changed', function() {
    // 3 seconds after the center of the map has changed, pan back to the
    // marker.
    window.setTimeout(function() {
      map1.panTo(marker1.getPosition());
    }, 3000);
  });

  google.maps.event.addListener(marker1, 'click', function() {

    //alert("entraaa...a click inicio");
    var markerLatLng = marker1.getPosition();
    
    //alert("entrra a click");
    //map1.setZoom(14);
    map1.setCenter(markerLatLng);

    //alert("llega hasta aqui");
    //document.getElementById('inilong').value=markerLatLng.lng(); 


    //var inilat = vardocument.getElementById("inilat");
    //inilat.value = markerLatLng.lat();

  });

  google.maps.event.addListener(map2, 'center_changed', function() {
    // 3 seconds after the center of the map has changed, pan back to the
    // marker.

    window.setTimeout(function() {
      map2.panTo(marker2.getPosition());
    }, 3000);
  });

  google.maps.event.addListener(marker2, 'click', function() {
    //map2.setZoom(14);
    //alert("entra a marker2");
    map2.setCenter(marker2.getPosition());
    //alert("hiciste click");
    //document.getElementById("inilong").value = 'no mames guey';
  });

   google.maps.event.addListener(marker1,'drag',function(event) {
        document.getElementById('inilat').value = event.latLng.lat().toFixed(6);
        document.getElementById('inilong').value = event.latLng.lng().toFixed(6);
    });

    google.maps.event.addListener(marker1,'dragend',function(event) {
        document.getElementById('inilat').value = event.latLng.lat().toFixed(6);
        document.getElementById('inilong').value = event.latLng.lng().toFixed(6);
    });

     google.maps.event.addListener(marker2,'drag',function(event) {
        document.getElementById('finlat').value = event.latLng.lat().toFixed(6);
        document.getElementById('finlong').value = event.latLng.lng().toFixed(6);
    });

    google.maps.event.addListener(marker2,'dragend',function(event) {
        document.getElementById('finlat').value = event.latLng.lat().toFixed(6);
        document.getElementById('finlong').value = event.latLng.lng().toFixed(6);
    });


}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>


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
                          Registro de Rutas</h3>
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
            <table width="95%" border="0" class="table table-bordered">
      
      <tr border="10px">
            <td width="40%" >Insertar punto de Partida:
              <textarea rows="4" cols="50" placeholder="Insertar Informacion de calles Adyacentes.">
              </textarea>
              <table>
                <tr>
                  <td>Latitud</td>
                  <td><input type="text" name="inilat" id="inilat" value="" /></td>
                </tr>
                <tr>
                  <td>Longitud</td>
                  <td><input type="text" name="inilong" id="inilong" value="" /></td>
                </tr>
              </table>
            </td>
              <td width="60%"><div id="map1" style="widht:500px;height:200px;border:2px solid blue;margin:6px 0 6px 0;"></div></td>
      </tr>
      <tr border="10px">
            <td width="40%" >Insertar punto de Llegada:
                <textarea rows="4" cols="75" placeholder="Insertar Informacion de calles Adyacentes.">
                </textarea>
                <table>
                <tr>
                  <td>Latitud</td>
                  <td><input type="text" name="finlat" id="finlat" value="" /></td>
                </tr>
                <tr>
                  <td>Longitud</td>
                  <td><input type="text" name="finlong" id="finlong" value="" /></td>
                </tr>
              </table>
            </td>
              <td width="60%"><div id="map2" style="widht:500px;height:200px;border:2px solid blue;margin:6px 0 6px 0;"></div></td>
      </tr>    
    </table>
        </td>
      </tr>
    </table>

  














    
  </div>
  <div align="center">
    <table width="95%" border="0">
      
  <tr>
        <td>
  
        <div>
            <table id="datatables" class="display">
                <thead>
                    <tr class="Eliminar">
                        <th>Id Ruta</th>
                        <th>Parada Inicial</th>
                        <th>Parada Final</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysql_fetch_array($result)) {
                        ?>
                        <tr>
            
                            <td><?php
                $idautobus=$row['idruta'];
                echo  $idautobus;
              ?> </td>
                            <td><?php
                $placa=$row['paradainicial'];
                echo $placa;
              ?></td>
              <td><?php
                $estado=$row['paradafinal'];
                echo $estado;
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
<form name="form2" method="post" enctype="multipart/form-data" action="insertarAutobus.php">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
    <h3 id="myModalLabel">Ingresar Nueva Ruta</h3>
  </div>
  <div class="modal-body">
    <div class="row-fluid">
          <div class="span6">
              <strong>Parada Inicial</strong><br>
              <input type="text" name="placa" autocomplete="off" required><br>
              <strong>Otro mensaje</strong>
              <div id="map1" style="height:200px;border:2px solid blue;margin:6px 0 6px 0;"></div>
                <strong>Parada Final </strong><br>
        <input type="text" name="estado" autocomplete="off" required><br>            
            </div>
            <div class="span6">
              <strong>Chofer </strong><br>
                                                            <select name="idchofer">
                                                            <?php
                                                            /*
                                                                $c=mysql_query("SELECT * FROM autobus");
                                                                while($d=mysql_fetch_array($c)){
                                                                    echo '<option value="'.$d['idchofer'].'">'.$d['nombre'].'</option>';
                                                                }*/
                                                            ?>                                     
                                                            </select><br>
        <center><button type="submit" class="btn btn-primary"><strong><i class="icon-ok"></i>Agregar Autobus</strong></button></center>
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
