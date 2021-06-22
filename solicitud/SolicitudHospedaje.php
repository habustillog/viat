

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
     <title>SolicitudHospedaje</title>
   </head>
   <body>
     <header>
       <?php
       require_once('../assets/header.php')
        ?>
     </header>
     <div style="text-align:center; ">



   </div>
     <div id="logreg-forms">
       <form class="form-signin" style="background: rgb(255, 255, 255);" method="post" action="../registro/sh.php">
         <div class=" mb-4 font-weight-normal" >
  <fieldset>
    <legend class="text-center header"><h4>Solicitud de Hospedaje</h4></legend>
    <div class="form-group">
       <div class="col-md-12">
            <label for="dn" class="control-label">DN</label>
            <input id="" name="dn" type="text" placeholder="DN" class="form-control">
        </div>
    </div>
    <div class="form-group">
       <div class="col-md-12">
          <label for="hospedaje" class="control-label">Tipo de Hospedaje</label>
       <select class="form-control" id="" name="hospedaje[]">
           <option value="Hotel">Hotel</option>
           <option value="AIRBNB">AIRBNB</option>
            <option value="AIRBNB">Casa Ciudad del Carmen</option>
           </select>
        </div>
    </div>

    <div class="form-group">
       <div class="col-md-12">
            <label for="empresa" class="control-label">Nombre de la Empresa</label>
            <input id="" name="empresa" type="text" placeholder="Nombre del Hotel, Hostal, AIRBNB, etc." class="form-control">
        </div>
    </div>
    <div class="form-group">
       <div class="col-md-12">
            <label for="ubicacion" class="control-label">Ubicación de LLegada</label>
            <input id="" name="ubicacion" type="text" placeholder="Av.Santa Mónica33, Col. El Mirador, C.P. 54080." class="form-control">
        </div>
    </div>
    <div class="form-group">
       <div class="col-md-12">
            <label for="presupuesto" class="control-label">Presupuesto</label>
            <input id="" name="presupuesto" type="number" placeholder="
            MXN" class="form-control">
        </div>
    </div>
    <div class="form-group">
       <div class="col-md-12">
            <label for="diallegada" class="control-label">Día de LLegada</label>
            <input id="" name="diallegada" type="date" placeholder="" class="form-control">
        </div>
    </div>


    <div class="form-group">
       <div class="col-md-12">
            <label for="diallegada" class="control-label">Día de Salida</label>
            <input id="" name="diasalida" type="date" placeholder="" class="form-control">
        </div>
    </div>


 <div class="form-group">
     <div class="col-md-12 text-center">
         <button type="submit" value="registrar" class="btn btn-primary btn-lg">Enivar</button>
     </div>
 </div>
       </fieldset>
       </form>
     </div>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     <footer>
   <?php
   require_once('../assets/footer.php')
    ?>
     </footer>
   </body>
 </html>
