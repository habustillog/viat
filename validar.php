<?php
$email=$_POST['email'];
$password=$_POST['password'];
session_start();
$_SESSION['email']=$email;

$conexion = mysqli_connect("localhost","root","","viats");


$consulta="SELECT*FROM usuarios WHERE usuarios='$email' and password='$password' ";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);

if($filas){
  header("location:index.php");
}else{
?>
<?php
incluide("login.php");
?>
<h1>Error</h1>
<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
