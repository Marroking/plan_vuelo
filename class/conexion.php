<?php
  //Crear la conexión a Bi
  
  $link = mssql_connect('192.168.100.7', 'sa', 'Radec866')
    or die('No se puede conectar al servidor');
  
  mssql_select_db('PosModulos', $link) or die ('No se peude conectar a la DB');

  
?>

