<?php
include '../conexion.php';
//Validar Datos vacios
if (
  isset($_POST['dn']) && !empty($_POST['dn']) &&
  isset($_POST['hospedaje']) && !empty($_POST['hospedaje']) &&
  isset($_POST['empresa']) && !empty($_POST['empresa']) &&
  isset($_POST['ubicacion']) && !empty($_POST['ubicacion']) &&
  isset($_POST['presupuesto']) && !empty($_POST['presupuesto']) &&
  isset($_POST['diallegada']) && !empty($_POST['diallegada']) &&
  isset($_POST['diasalida']) && !empty($_POST['diasalida']) 
  )
{
//Recibir los Datos
$dn = $_POST["dn"];
$hospedaje = $_POST["hospedaje"];
$empresa = $_POST["empresa"];
$ubicacion = $_POST["ubicacion"];
$presupuesto = $_POST["presupuesto"];
$diallegada = $_POST["diallegada"];
// $horallegada = $_POST["horallegada"];
$diasalida = $_POST["diasalida"];
// $horasalida = $_POST["horasalida"];



for ($i=0;$i<count($hospedaje);$i++)
{
  $hospedaje1 = $hospedaje[$i];
echo "$dn $hospedaje1 $empresa $ubicacion $presupuesto $diallegada $diasalida ";
}



//Consulta para insertar
$insertar = "INSERT INTO solicitudhospedaje(DN, Hospedaje, Empresa, Presupuesto, Ubicacion, DiaLLegada, DiaSalida ) VALUES ('$dn','$hospedaje1','$empresa','$presupuesto','$ubicacion','$diallegada','$diasalida')";
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
