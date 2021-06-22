

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
   require_once('assets/header.php')
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
