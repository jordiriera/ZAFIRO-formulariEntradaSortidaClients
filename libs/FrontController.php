<?php
class FrontController

{
    static function main()
    {

        require 'libs/Config.php'; //de configuracion
        require 'libs/SPDO.php'; //PDO con singleton
        require 'controllers/ViewController.php'; //Mini motor de plantillas

        require 'd_config.php'; //Archivo con configuraciones.


        if(! empty($_GET['c']))
              $controllerName = $_GET['c'] . 'Controller';
        else
              $controllerName = "IndexController"; //IndexControllerya no existe


        if(! empty($_GET['a']))
              $actionName = $_GET['a'];
        else
              $actionName = "index";

        $controllerPath = $config ->get('controllersFolder') . $controllerName . '.php';


        if(is_file($controllerPath))
              require $controllerPath;
        else
              die('El controlador no existe - 404 not found');


        if (is_callable(array($controllerName, $actionName)) == false)
        {
            trigger_error ($controllerName . '->' . $actionName . ' no existe', E_USER_NOTICE);
            return false;
        }

        $controller = new $controllerName();
        $controller->$actionName();
    }
}
?>
