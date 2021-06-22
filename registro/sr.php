<?php
include '../conexion.php';
//Recibir los Datos
$dn = $_POST["dn"];
$motivo = $_POST["motivo"];
$evidencia = $_POST["evidencia"];







//Consulta para insertar
$insertar = "INSERT INTO solicitudreembolso (DN, Motivo, Evidencia) VALUES ('$dn','$motivo','$evidencia',)";
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


 if (count($_evidencia) > 0) { if (is_uploaded_file($evidencia['userImage']['tmp_name'])) { require_once "db.php"; $imgData = addslashes(file_get_contents($_FILES['userImage']['tmp_name'])); $imageProperties = getimageSize($_FILES['userImage']['tmp_name']); $sql = "INSERT INTO output_images(imageType ,imageData) VALUES('{$imageProperties['mime']}', '{$imgData}')"; $current_id = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn)); if (isset($current_id)) { header("Location: listImages.php"); } } }
