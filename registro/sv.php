<?php
include '../conexion.php';
//Validar Datos vacios
if (
  isset($_POST['dn']) && !empty($_POST['dn']) &&
  isset($_POST['comida']) && !empty($_POST['comida']) &&
  isset($_POST['hospedaje']) && !empty($_POST['hospedaje'])
  )
{

//Recibir los Datos
$dn = $_POST["dn"];
$comida = $_POST["comida"];
$hospedaje = $_POST["hospedaje"];

//Consulta para insertar
$insertar = "INSERT INTO solicitudviaticos (DN, DiasComida, DiasHospedajeCarretera) VALUES ('$dn','$comida','$hospedaje')";
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
