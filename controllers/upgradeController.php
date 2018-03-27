<?php
class upgradeController
{
    public function __construct()
    {
        //Creamos una instancia de nuestro mini motor de plantillas
        $this->view = new View();

      //  require 'models/form2Model.php';


    }


    public function index()
    {
        //$dades['dades'] = principalModel::getAll();


        $this->view->show("upsellingForm.php");
    }


    public function send(){


        header("Location: ask.php?c=thanks");


    }
}
