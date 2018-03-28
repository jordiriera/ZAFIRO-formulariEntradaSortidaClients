<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>ARRIBADES</title>
  <?php include 'head.php' ?>
</head>
<script>

$(document).ready(function(){

  //  ***** SI EL CHECK "checkTlf" esta "checked", es posa en disabled el telèfon ***** //
  $("#telefon").prop('disabled', true);

  $("#checkTlf").click(function() {
    if ($("#checkTlf").is(':checked')) {
      $("#telefon").prop('disabled', false);

    } else {
      $("#telefon").prop('disabled', true);
    }

  });


  //***** CLOCKPICKER *****//
  $('.clockpicker').clockpicker()
  .find('input').change(function(){
    console.log(this.value);
  });
  var input = $('#single-input').clockpicker({
    placement: 'bottom',
    align: 'left',
    autoclose: true,
    'default': 'now',

  });


});
</script>
<body background= img/imgBackground.jpg>
  <?php include 'header.php' ?>
  <main class="container" >
    <h1>try1 <i class="fa fa-clock-o" aria-hidden="true"></i></h1>
    <form method="post" action="ask.php?c=arrival&a=send">
      <hr class="my-4">

      <div class="padding5"> <!-- dades de l'usuari seleccionades de la Base de Dades -->
        <div class="form-group row">
          <div class="col-md-6">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" name="nom" value="<?php echo $user->name ?>" disabled>

          </div>
          <div class="col-md-6">
            <label for="cognoms">Cognoms</label>
            <input type="text" class="form-control"  name="cognoms" value="<?php echo $user->surname1 ." ". $user->surname2 ?> " disabled>
          </div>
        </div>
        <div class="form-group row">
          <input type="hidden" name="telephone" value="<?php echo $user->telephone ?>">

          <div class="col-md-6">
            <label for="Telèfon">Telèfon <i class="fas fa-phone"></i></label>
            <input type="text" id="telefon" placeholder="Telèfon" class="form-control"  maxlength="9" name="telephone" pattern="(((\d{9})))" title="Telèfon" value="<?php echo $user->telephone ?>" required>
            <label>
              <input type="checkbox" name="canviNum" id="checkTlf" value="canviNum"> Canviar Numero?
            </label>
          </div>

          <input type="hidden" name="idUser" value="<?php echo $user->ID ?>">

          <div class="col-md-6">
            <label for="hotel">Hotel</label>
            <input type="text" class="form-control"  name="hotel" value="<?php echo $buy->hotel ?>" disabled>
          </div>
        </div>
      </div>
      <!-- ********** IMATGE CENTRADA ********** -->
      <div class="text-center">
        <img class="rounded" src="img/img3.jpg" style=" max-height: 500px" alt="image not charging">
      </div>
      <br><br>

      <!-- ********* INPUT HIDDEN PER AGAFAR LA ID DE COMPRA AMB EL POST ********* -->

      <input type="hidden" name="idCompra" value="<?php echo $buy->ID ?>">

      <!-- ******* PROVES ARRIBADA ******* --><!-- Aqui l'usuari introdueix les hores d'arribada dins els dies corresponents  -->
      <h2>Entrada</h2>
      <div class="col-md-5 d-inline-block">

        <label for="diaArribada">Dia d'arribada</label>
        <div class="input-group col-12 ">
          <span class="input-group-text" id="basic-addon1"><i class="far fa-calendar-alt"></i></span>
          <input type="text" class="form-control" name="diaArribada" value="<?php echo $buy->entrada ?>" disabled>
        </div>
      </div><div class="col-md-2 d-inline-block"></div><!--
      --><div class="col-md-5 d-inline-block">

      <label for="sortida">Hora d' arribada</label>
      <div class="input-group col-12 ">
        <span class="input-group-text" id="basic-addon1"><i class="far fa-clock" aria-hidden="true"></i></span>
        <input type="time" class="clockpicker form-control" data-autoclose="true"  placeholder="Hora d'arribada" name="horaArribada" required>
      </div>
    </div>


    <!-- ******* PROVES SORTIDA ******* --><!-- Aqui l'usuari introdueix les hores de sortida dins els dies corresponents  -->
    <h2>Sortida</h2>
    <div class="col-md-5 d-inline-block">

      <label for="diaSortida">Dia de sortida</label>
      <div class="input-group col-12 ">
        <span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar-alt"></i></span>
        <input type="text" class="form-control" name="diaSortida" value="<?php echo $buy->sortida ?>" disabled>
      </div>
    </div><div class="col-md-2 d-inline-block"></div><!--
    --><div class="col-md-5 d-inline-block">

    <label for="sortida">Hora de sortida</label>
    <div class="input-group col-12 ">
      <span class="input-group-text" id="basic-addon1"><i class="fa fa-clock" aria-hidden="true"></i></span>
      <input type="time" class="clockpicker form-control" data-autoclose="true"  placeholder="Hora de sortida" name="horaSortida" required>
    </div>
  </div>

  <br><br>


  <div class="form-group">
    <label for="comentari">Comentaris <i class="far fa-comment-alt"></i></label>
    <textarea class="form-control" rows="3" name="comentari" placeholder="insertar un comentari"></textarea>
  </div>

  <br>

  <div class="col-md-10 d-inline-block"></div><button type="submit" style="height: 35px" class="btn-outline-primary form-control col-md-2 d-inline-block"> Siguiente </button>

</form>
</main>
<?php include 'footer.php' ?>
</body>
</html>
