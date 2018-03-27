<?php
class IndexController
{
    public function index()
    {

    $user = '250649';
    $token = sha1($user);

    print_r($token);

    require 'views/arrivalForm.php';

    header("Location : http://localhost/ask.php?arrival& . $token");
    }
}
?>
