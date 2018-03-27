<?php
class mailController
{

  public function __construct(){

    $this->view = new View();

    require 'models/mailModel.php';

  }




  public function index()
    {

        $mail = mailModel::sendMail('prova', 'jriera@zafirohotels.com');

        $this->view->show('arrivalForm.php');




      //header("Location : http://localhost/ask.php?arrival& . $token");
    }
}
?>
