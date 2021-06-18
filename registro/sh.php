<?php
include ("conexion.php");


$dn = $_POST["dn"];
$hospedaje = $_POST["hospedaje"];
$empresa = $_POST["empresa"];
$ubicacion = $_POST["ubicacion"];
$presupuesto = $_POST["presupuesto"];
$diallegada = $_POST["diallegada"];
$horallegada = $_POST["horallegada"];
$diasalida = $_POST["diasalida"];
$horasalida = $_POST["horasalida"];




$insertar = "INSERT INTO solicitudhospedaje (DN, Hospedaje, Empresa, Presupuesto, Ubicación, Diallegada, Horallegada, DiaSalida, HoraSalida) VALUES ('$dn','$hospedaje','$empresa','$presupuesto','$ubicacion','$diallegada','$horallegada','$diasalida','$horasalida')";


$resultado = mysqli_query ($conexion, $insertar);

if($resultado){ 
  echo "<script>alert('bien puto');window.location='/viat'</script>";

}
else {
  echo "<script>alert('bien puto');window.history.go(-1);</script>";
}
 ?>
