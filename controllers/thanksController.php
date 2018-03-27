<?php
class thanksController
{
    public function __construct()
    {
        //Creamos una instancia de nuestro mini motor de plantillas
        $this->view = new View();

    }


    public function index()
    {
        //$dades['dades'] = principalModel::getAll();


        $this->view->show("thanks.php");
    }


    public function send(){

    //  header("Location: ask.php?c=upgrade");

    }


}
