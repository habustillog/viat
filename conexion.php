

<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "viats";

$conexion = new mysqli ($server, $user, $pass, $db);

if($conexion->connect_errno) {
  die("La conexión fallo" . $$conexion->connect_errno);
}else{
  echo "te rifaste";
}
