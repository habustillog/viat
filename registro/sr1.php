<?php
include '../conexion.php';
//Recibir los Datos
// if (
//   isset($_POST['dn']) && !empty($_POST['dn']) &&
//   isset($_POST['dn']) && !empty($_POST['dn'])
//   )


// $dn = $_POST["dn"];
// $motivo = $_POST["motivo"];
// $cantidad = $_POST["cantidad"];

echo "DN: $dn <br>";
echo "motivo: $motivo<br>";
echo "cantidad: $cantidad<br>";

if(isset($_POST["submit"])){
    $revisar = getimagesize($_FILES["evidencia"]["tmp_name"]);
    if($revisar !== false)
        $image = $_FILES['evidencia']['tmp_name'];
        $imgContenido = addslashes(file_get_contents($image));

}
        echo "$imagContenido" ;
else{
  echo "vlv"
}
// if ( !empty($_FILES['evidencia']) && is_uploaded_file($_FILES['evidencia']['tmp_name'])) {
//
//   $imgData = addslashes(file_get_contents($_FILES['evidencia']['tmp_name']));
//   $imageProperties = getimageSize($_FILES['evidencia']['tmp_name']);

  // echo "{$imageProperties['mime']} {$imgData} ";

    // $sql = "INSERT INTO solicitudreembolso(DN , Motivo, Evidencia, Canttidad) VALUES('$dn','$motivo', '{$imageProperties['mime']}', '{$imgData}', '$cantidad')";
    // $current_id = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conexion));
    // if (isset($current_id)) {
    //   header("Location: listImages.php");
    // }

// }else {
//   echo "string";
// }
