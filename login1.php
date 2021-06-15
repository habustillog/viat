<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="google-signin-client_id" content="647327890949-p258favcg5medm53tegot4li91nuuvus.apps.googleusercontent.com">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Login</title>
</head>
<body>

    <div id="logreg-forms">
        <form class="form-signin" style="background: rgb(255, 255, 255);"  action="validar.php" method="post">
          <div class="h3 mb-3 font-weight-normal" style="text-align: center">
            <img src="assets/img/logo.png" alt="Gpt Services">
          </div>
          <label for="email" class="control-label">Correo de Gpt Services</label>
          <input id="email" name="email" type="email" placeholder="ejemplo@gptservices.com" class="form-control">
          <label for="password" class="control-label">Contraseña</label>
          <input id="password" name="password" type="password" placeholder="Contraseña" class="form-control">
            <div class="social-login h3 mb-3 font-weight-normal" style="text-align: center">

            <button class="btn google-btn social-btn" type="submit" style="width:350px;" ><span style="font-size:20" >Iniciar sesión</span> </button>
            </div>

</form>

    </div>
  <footer>
<?php
require_once('assets/footer.php')
 ?>
  </footer>


</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="assets/js/script.js"></script>
<script src="https://apis.google.com/js/platform.js" async defer></script>
</html>
