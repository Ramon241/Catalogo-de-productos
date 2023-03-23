<?php 
  $servidor = "localhost";
  $usuario = "id20228458_root";
  $password = "9O-j=K~/Ba3A}B?E";
  $nombreBD = "id20228458_colrosa";
  $conexion = new mysqli($servidor, $usuario, $password, $nombreBD);
  if ($conexion->connect_error){ die("La conexión ha fallado " . $conexion->connect_error); }
?>