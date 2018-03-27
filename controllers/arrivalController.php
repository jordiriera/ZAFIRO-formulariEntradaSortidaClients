<?php
class arrivalController
{
    public function __construct()
    {
        //Creamos una instancia de nuestro mini motor de plantillas
        $this->view = new View();

        require 'models/userModel.php';
        require 'models/buyModel.php';


    }


    public function index()
    {
        //$dades['dades'] = principalModel::getAll();
        $dades['user'] = userModel::find($_GET['id']);
        $dades['buy'] = buyModel::find($_GET['id'], $_GET['idCompra']);


        $this->view->show("arrivalForm.php", $dades);
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
