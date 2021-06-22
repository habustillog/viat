<?php
include '../conexion.php';
//Recibir los Datos
$dn = $_POST["dn"];
$transporte = $_POST["transporte"];
$empresa = $_POST["empresa"];
$presupuesto = $_POST["presupuesto"];
$diallegada = $_POST["diallegada"];
// $horallegada = $_POST["horallegada"];
$diasalida = $_POST["diasalida"];
// $horasalida = $_POST["horasalida"];



for ($i=0;$i<count($transporte);$i++)
{
  $tranposrte1 = $hospedaje[$i];
echo "$dn $hospedaje1 $empresa $ubicacion $presupuesto $diallegada $diasalida ";
}



//Consulta para insertar
$insertar = "INSERT INTO solicitudhospedaje(DN, Tranporte, Empresa, Presupuesto, DiaLLegada, DiaSalida, ) VALUES ('$dn','$transporte1','$empresa','$presupuesto','$diallegada','$diasalida',)";
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
