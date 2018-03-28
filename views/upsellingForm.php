<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>UPSELLING</title>
  <?php include 'head.php' ?>
</head>
<script>
$(document).ready(function(){

  $('#obriDiv0').hide();
  $('#obriDiv1').hide();
  $('#obriDiv2').hide();


  $('#divToggle0').click(function() {
    $('#obriDiv0').toggle("fast");
  });
  $('#divToggle1').click(function() {
    $('#obriDiv1').toggle("fast");
  });
  $('#divToggle2').click(function() {
    $('#obriDiv2').toggle("fast");
  });

});
</script>
<body background= img/imgBackground.jpg>
  <?php include 'header.php' ?>
  <main class="container" >
    <h1>Vols millorar la teva estància? </h1>
    <hr class="my-4">

    <h2>Tenim ofertes per tu!</h2>
    <form method="post" action="ask.php?c=upgrade&a=send">
      <div class="col-md-12 card-header" id="divToggle0">
        Millores
      </div>
      <div class="col-md-12" id="obriDiv0">
        <label class="col-md-3 selectOffers">
          Jacuzzi
          <input type="checkbox" name="" value="">
          <img src="img/img2.jpg" style="max-height: 100px" alt="">
        </label><!--
        --><label class="col-md-3 selectOffers">
        Doble llit
        <input type="checkbox" name="" value="">
        <img src="img/img2.jpg" style="max-height: 100px" alt="">
      </label><!--
      --><label class="col-md-3 selectOffers">
      Doble llit
      <input type="checkbox" name="" value="">
      <img src="img/img2.jpg" style="max-height: 100px" alt="">
    </label><!--
    --><label class="col-md-3 selectOffers">
    Doble llit
    <input type="checkbox" name="" value="">
    <img src="img/img2.jpg" style="max-height: 100px" alt="">
  </label>
  <br>
  <div class="d-inline-block col-md-10"></div><button type="button" class="btn btn-secondary botoCompra col-md-2 d-inline-block" name="button">Seleccionar</button>

</div>
<div class="col-md-12 card-header" id="divToggle1">
  Excursions
</div>
<div class="col-md-12" id="obriDiv1">
  <label class="col-md-3 selectOffers">
    Jacuzzi
    <input type="checkbox" name="" value="">
    <img src="img/img2.jpg" style="max-height: 100px" alt="">
  </label><!--
  --><label class="col-md-3 selectOffers">
  Doble llit
  <input type="checkbox" name="" value="">
  <img src="img/img2.jpg" style="max-height: 100px" alt="">
</label><!--
--><label class="col-md-3 selectOffers">
Doble llit
<input type="checkbox" name="" value="">
<img src="img/img2.jpg" style="max-height: 100px" alt="">
</label><!--
--><label class="col-md-3 selectOffers">
Doble llit
<input type="checkbox" name="" value="">
<img src="img/img2.jpg" style="max-height: 100px" alt="">
</label>
<br>
<div class="d-inline-block col-md-10"></div><button type="button" class="btn btn-secondary botoCompra col-md-2 d-inline-block" name="button">Seleccionar</button>

</div>

<button type="submit" class="btn btn-outline-secondary form-control" >Comprar</button>
</form>
</main>
<?php include 'footer.php' ?>
</html>
