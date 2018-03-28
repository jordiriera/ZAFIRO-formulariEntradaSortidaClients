<?php
class encryptModel
{


  public static function encrypt($data1, $data2){

    // Dades que s'encriptaran
    $idUser = $data1;
    $idCompra = $data2;

    // data son varies dades concatenades
    $data = $idUser . '/' . $idCompra;

    // metode o algoritme que emplearem per encriptar
    $method = 'aes-256-ctr';    // NOTA : AQUEST MÈTODE HA DE SER IGUAL QUAN ENCRIPTA QUE QUAN DESENCRIPTA

    //contrasenya que emplearem per encriptar i desencriptar les dades
    $pass = "n4XeZ9EjPc1RU8cMI4";    // NOTA : AQUESTA CONTRASENYA HA DE SER IGUAL QUAN ENCRIPTA QUE QUAN DESENCRIPTA
    //$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length());



    //metode per encriptar
    $encrypt =  openssl_encrypt($data, $method, $pass);


    // això ens mostrara el codi encriptat
    echo $encrypt;

    return $encrypt;



    //*****   PROVES *****//
    //$encrypt = openssl_encrypt($encrypt, $method, $pass);
    //echo '<br>';
    //echo $encrypt;

  }
}

?>
