<?php
class provesController
{
  public function __construct()
  {
    //Creamos una instancia de nuestro mini motor de plantillas
    $this->view = new View();

    require 'models/userModel.php';
    require 'models/buyModel.php';
    require 'models/decryptModel.php';


  }


  public function index()
  {
    // Agafam les dades encriptades desde la URL
    $decrypt = decryptModel::decrypt($_GET['id']);

    //  Explode() es una mètode per fer substring
    $important = explode("/", $decrypt);

    // organitzam les dades en variables
    $try = $important[0];
    $try2 = $important[1];

    //li passam les dades als models que ataquen la base de dades
    $dades['user'] = userModel::find($try);
    $dades['buy'] = buyModel::find($try, $try2);

    $this->view->show("arrivalForm.php", $dades);


    // ***** PROVES PER SI FUNCIONA ***** //
    // url = http://localhost/formulariEntradaSortida/ask.php?c=proves&id=CGQK
    // aquesta url du id user 1 i id compra 5
    // $dades['user'] = userModel::find(1);
    // $dades['buy'] = buyModel::find($try['client'], $try['compra']);

    // print_r($dades);
    // echo '<br>';
    //
    // print_r($try);
    // echo '<br>';
    // print_r($try2);
    // echo '<br>';

    // print_r($compra);
    // echo '<br>';
    // print_r($important);
  }
  public function send(){


    $comentari = $_POST['comentari'];

    $comentari = !empty($comentari) ? "$comentari" : "NULL";

    //  ***** TESTS *****
    //print_r('<br>' . 'CONTROLLER  ' . $_POST['telephone']);
    //print_r('<br>' . 'CONTROLLER ' . $_POST['horaArribada'] . $_POST['horaSortida'] . $comentari);

    userModel::update($_POST['idUser'], $_POST['telephone']);
    buyModel::update($_POST['idCompra'], $_POST['horaArribada'], $_POST['horaSortida'], $comentari);

    header("Location: ask.php?c=upgrade");

  }

}
