<?php
include '../conexion.php';
//Validar Datos vacios
if (
  isset($_POST['dn']) && !empty($_POST['dn']) &&
  isset($_POST['motivo']) && !empty($_POST['motivo']) &&
  isset($_POST['cantidad']) && !empty($_POST['cantidad'])
  )
{

//Recibir los Datos
$dn = $_POST["dn"];
$motivo = $_POST["motivo"];
$cantidad = $_POST["cantidad"];

if ( !empty($_FILES["evidencia"])) {
  echo $_FILES["evidencia"]['tmp_name'];
}else {
  echo "string";
}
    $insertar = "INSERT INTO solicitudreembolso (DN , Motivo, Cantidad, Evidencia) VALUES ('$dn','$motivo', '$cantidad', '$evidencia')";
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
