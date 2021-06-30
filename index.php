<?php

//index.php

//Include Configuration File
include('config.php');

$login_button = '';


if(isset($_GET["code"]))
{

 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
 if(!isset($token['error']))
 {

  $google_client->setAccessToken($token['access_token']);


  $_SESSION['access_token'] = $token['access_token'];


  $google_service = new Google_Service_Oauth2($google_client);


  $data = $google_service->userinfo->get();


  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
 }
}


if(!isset($_SESSION['access_token']))
{
 $login_button = '<a href="'.$google_client->createAuthUrl().'">Login With Google</a>';
}

?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Index</title>
</head>
<style media="screen">

  .padre {

  height: 250px;
  /*IMPORTANTE*/
  display: flex;
  justify-content: center;
  align-items: center;

}
</style>
   <body>


     <header>
       <?php
       if($login_button == '')
       {
        echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
        echo '<img src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail" />';
        echo '<h3><b>Name :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
        echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
        echo '<h3><a href="logout.php">Logout</h3></div>';
       }
       else
       {
        echo '<div align="center">'.$login_button . '</div>';
       }
       ?>
  </header>
  <main>


  <div style="text-align:center; ">

<h1>BIENVENIDO EN ESTE PORTAL PODRAS GENERAR SOLICITUDES GENERALES</h1>
<h3>POR FAVOR SELECCIONE QUE TIPO DE SOLICITUD DESEAS REALIZAR</h3>
</div>
<div class="padre">


<table>
  <tr>
    <td>
      <a href="solicitud/SolicitudTransporte.php"><button class="btn"type="button" name="button">SOLICITUD DE TRANSPORTE</button></a>
 </td>
    <td>
    <a href="solicitud/SolicitudHospedaje.php"><button class="btn" type="button" name="button">SOLICITUD DE HOSPEDAJE</button></a>
    </td>
    <td>
    <a href="solicitud/SolicitudUtilidades.php"><button class="btn" type="button" name="button">SOLICITUD DE UTILIDADES</button></a>
    </td>
    <td>
    <a href="solicitud/SolicitudViaticos.php"><button class="btn" type="button" name="button">SOLICITUD DE VIATICOS</button></a>
    </td>
    <td>
    <a href="solicitud/SolicitudReembolso.php"><button class="btn" type="button" name="button">SOLICITUD DE REEMBOLSO</button></a>
    </td>

  </tr>
</table>
</div>

</div>
  </main>
     <footer>
   <?php
   require_once('assets/footer.php')
    ?>
     </footer>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     <script src="assets/js/script.js"></script>
   </body>
 </html>
