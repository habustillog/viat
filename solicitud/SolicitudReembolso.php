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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>SolicitudReembolso</title>
</head>
<body>
  <header>
    <?php
   require_once('header.php')
     ?>
  </header>
  <main>
    <div class="" id="logreg-forms">

      <form class="" style="background: rgb(255, 255, 255);" method="post" action="../registro/sr.php" enctype="multipart/form-data">
        <div class=" mb-4 font-weight-normal" >
          <fieldset>
            <legend class="text-center header"><h4>Solicitud de Reembolso</h4></legend>
            <div class="form-group">
             <div class="col-md-12">
                  <label for="dn" class="control-label">DN</label>
                  <input id="dn" name="dn" type="text" placeholder="DN" class="form-control" required>
              </div>
          </div>
          <div class="form-group">
             <div class="col-md-12">
                  <label for="motivo" class="control-label">Motivo de Reembolso</label>
                  <textarea class="form-control" id="motivo" name="motivo" rows="8" cols="1000" placeholder="Describe el motivo de tu reembolso"></textarea>
            </div>
          </div>
          <div class="form-group">
             <div class="col-md-12">
                  <label for="cantidad" class="control-label">Cantidad de Reembolso</label>
                  <input id="" name="cantidad" type="number" step="any" min="0" placeholder="$0.00 MXN" class="form-control" required>
              </div>
          </div>
          <div class="form-group">
             <div class="col-md-12">
                  <label for="evidencia" class="control-label">Anexar evidencia</label>
                  <input id="evidencia"  type="file" name="evidencia" accept="image/*"  required>
              </div>
          </div>
          <div class="form-group">
              <div class="col-md-12 text-center">
                  <button type="submit" class="btn btn-primary btn-lg" name="enviar"  >Enivar</button>
              </div>
          </div>
        </div>

  </fieldset>
</form>

</div>
</main>

<footer>
<?php
//require_once('../assets/footer.php')
 ?>
  </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="../assets/js/script.js"></script>
</body>
</html>
