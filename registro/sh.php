<?php
require 'conexion.php';

$dn = $_POST['dn'];;
$hospedaje = $_POST['hospedaje'];
$empresa = $_POST['empresa'];
$ubicacionllegada = $_POST['dubicacionllegada'];
$presupuesto = $_POST['presupuesto'];
$diallegada = $_POST['diallegada'];
$horallegada = $_POST['horadellegada'];
$diasalida = $_POST['diasalida'];
$horasalida = $_POST['horadesalida'];

$insertar = "INSERT INTO solicitudhospedaje VALUES ('$dn','$hospedaje','$empresa','$presupuesto','$ubicacionllegada','$diallegada','$horadellegada','$diadesalida','$horadesalida')";

$query = mysqli_query($conexion, $insertar);

if($query){
  echo "bien puto";
}
else {
  echo "basura";
}
 ?>
