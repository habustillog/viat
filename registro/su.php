<?php

//Validar Datos vacios
if (
  isset($_POST['dn']) && !empty($_POST['dn']) &&
  isset($_POST['utilidad']) && !empty($_POST['utilidad']) &&
  isset($_POST['presupuesto']) && !empty($_POST['presupuesto'])
  )
{
  
include '../conexion.php';

//Recibir los Datos
$dn = $_POST["dn"];
$utilidad = $_POST["utilidad"];
$presupuesto = $_POST["presupuesto"];

//Consulta para insertar
$insertar = "INSERT INTO solicitudutilidades(DN, Utilidad, Presupuesto ) VALUES ('$dn','$utilidad','$presupuesto')";

//Ejectuar cosnsulta
$resultado = mysqli_query ($conexion, $insertar);
if(!$resultado){
  echo 'Error' . mysqli_error($conexion);

}
else {
  echo "<script>alert('Tu solicitud ha sido enviada, se te informara el proceso por correo electrónico, cualquier duda o aclaración favor de mandar un correo a habustillog@gptservices.com');
window.location= '../index.php'
  </script>";
}
//Cerrar conexión
mysqli_close($conexion);
}
else {
  echo "Error";
}
