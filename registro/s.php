<?php
include '../conexion.php';
if ( !empty($_FILES["evidencia"])) {
  echo $_FILES["evidencia"]['tmp_name'];
}else {
  echo "string";
}


// $dn = $_POST["dn"];
// $motivo = $_POST["motivo"];
// $cantidad = $_POST["cantidad"];
//
// if ($_FILES["evidencia"]) {
// $nombre_base = basename($_FILES["evidencia"]["name"]);
// $nombre_final = date("m-d-y" ."-"). date("H-i-s"). "-". $nombre_base;
// $ruta = "evidencia/" . $nombre_final;
// $subirarchivo = move_uploaded_file($_FILES["evidencia"]["name"], $ruta);
// if($subirarchivo){
//   $insertar = "INSERT INTO solicitudreembolso (DN, Motivo, Cantidad, Evidencia) VALUES ('$dn','$motivo','$cantidad','$ruta')";
//   $resultado = mysql_query($conexion, $insertar);
//   if($resultado){
//     echo "<script>alert('Tu solicitud ha sido enviada, se te informara el proceso por correo electrónico, cualquier duda o aclaración favor de mandar un correo a habustillog@gptservices.com');
//   window.location= '../index.php'
//     </script>";
//   }else{
//     echo 'Error' . mysqli_error($conexion);
//   }
// }
// }else {
//   echo "error al subir";
// }

?>
