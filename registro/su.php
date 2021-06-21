<?php
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
