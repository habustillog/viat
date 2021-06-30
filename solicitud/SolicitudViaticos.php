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
    <title>SolicitudViáticos</title>
</head>
<body>
  <header>
    <?php
       require_once('header.php')
     ?>
  </header>
  <main>
    <div class="" id="logreg-forms">
      <form class="" style="background: rgb(255, 255, 255);" method="post" action="../registro/sv.php">
        <div class=" mb-4 font-weight-normal" >
          <fieldset>
            <legend class="text-center header"><h4>Solicitud de Viáticos</h4></legend>

          <div class="form-group">
             <div class="col-md-12">
                  <label for="dn" class="control-label">DN</label>
                  <input id="dn" name="dn" type="text" placeholder="DN" class="form-control"  required>
              </div>
          </div>
          <div class="form-group">
             <div class="col-md-12">
                  <label for="comida" class="control-label">Días de comida</label>
                  <input class="form-control" id="comida" name="comida" type="number" min="0" placeholder="Número de días de comida"  required>

              </div>
          </div>
          <div class="form-group">
             <div class="col-md-12">
                  <label for="hospedaje" class="control-label">Días de hospedaje en carretera</label>
                  <input id="hospedaje" name="hospedaje" type="number" min="0" placeholder="Numéro de días de hospedaje en carretera" class="form-control"  required>
              </div>
          </div>
          <div class="form-group">
              <div class="col-md-12 text-center">
                  <button type="submit" class="btn btn-primary btn-lg">Enivar</button>
              </div>
          </div>
        </div>
      </form>
    </div>
  </fieldset>

</main>

<footer>
<?php
require_once('../assets/footer.php')
 ?>
  </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="../assets/js/script.js"></script>
</body>
</html>
