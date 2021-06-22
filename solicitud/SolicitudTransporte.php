

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->



 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
     <link rel="stylesheet" href="../assets/css/style.css">
     <title>SolicitudTransporte</title>
   </head>
   <body>
     <header>
       <?php
       require_once('../assets/header.php')
        ?>
     </header>
     <main>
     <div id="logreg-forms">
       <form class="form-signin" style="background: rgb(255, 255, 255);" action="../registro/st.php" method="post">
         <div class=" mb-4 font-weight-normal" >
  <fieldset>
    <legend class="text-center header"><h4>Solicitud de Transporte</h4></legend>
    <div class="form-group">
       <div class="col-md-12">
            <label for="dn" class="control-label">DN</label>
            <input id="dn" name="dn" type="text" placeholder="DN" class="form-control">
        </div>
    </div>
    <div class="form-group">
       <div class="col-md-12">
          <label for="transporte" class="control-label">Tipo de transporte</label>
       <select class="form-control" id="transporte" name="transporte[]">
           <option value="Aereo">Aereo</option>
           <option value="Particular">Particular</option>
           <option value="Privado">Privado</option>
           <option value="Publico">Publico</option>
           <option value="Flotilla">Flotilla</option>
           </select>
        </div>
    </div>
    <div class="form-group">
       <div class="col-md-12">
            <label for="empresa" class="control-label">Nombre de la Empresa</label>
            <input id="" name="empresa" type="text" placeholder="Volaris, ADO, GPT, etc." class="form-control">
        </div>
    </div>
    <div class="form-group">
       <div class="col-md-12">
            <label for="presupuesto" class="control-label">Presupuesto</label>
            <input id="" name="presupuesto" type="number" placeholder="$0.00 MXN" class="form-control">
        </div>
    </div>
    <div class="form-group">
       <div class="col-md-12">
            <label for="diallegada" class="control-label">Día de LLegada al destino</label>
            <input id="diallegada" name="diallegada" type="date" placeholder="" class="form-control">
        </div>
    </div>

    <div class="form-group">
       <div class="col-md-12">
            <label for="diasalida" class="control-label">Día de Salida</label>
            <input id="diasalida" name="diasalida" type="date" placeholder="" class="form-control">
        </div>
    </div>



 <div class="form-group">
     <div class="col-md-12 text-center">
         <button type="submit" class="btn btn-primary btn-lg">Enivar</button>
     </div>
 </div>
       </fieldset>
       </form>
     </div>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</main>
     <footer>
   <?php
   require_once('../assets/footer.php')
    ?>
     </footer>
   </body>
 </html>
