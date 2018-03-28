<?php
class decryptModel
{


  public static function decrypt($encrypt){
  
    // Aqui agafam el codi encriptat  link/trydeCrypt.php?id='codi'
    // $encrypt = $_GET['id'];

    //el mètode que empleam per desencriptar (el mateix que per encriptar)
    $method = 'aes-256-ctr';    // NOTA : AQUEST MÈTODE HA DE SER IGUAL QUAN ENCRIPTA QUE QUAN DESENCRIPTA

    //password que empleam per desencriptar (la mateixa que per encriptar )
    $pass = "n4XeZ9EjPc1RU8cMI4";    // NOTA : AQUESTA CONTRASENYA HA DE SER IGUAL QUAN ENCRIPTA QUE QUAN DESENCRIPTA

    //mètode que desencripta
    $decrypt = openssl_decrypt($encrypt, $method, $pass);

    echo '<br>';

    return $decrypt;
  }
}

?>
