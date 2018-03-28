<?php
class buyModel
{
  protected $db;

  public $ID;
  public $entrada;
  public $sortida;
  public $hotel;
  public $horaArribada;
  public $horaSortida;
  public $idUsuari;


  public function __construct($ID, $entrada, $sortida, $hotel, $horaArribada, $horaSortida, $idUsuari, $comentari)
  {
    $this->ID = $ID;
    $this->entrada = $entrada;
    $this->sortida = $sortida;
    $this->hotel = $hotel;
    $this->horaArribada = $horaArribada;
    $this->$horaSortida = $horaSortida;
    $this->$idUsuari = $idUsuari;
    $this->$comentari = $comentari;
  }


  public static function getAll()
  {
    $list = [];
    $db = SPDO::singleton();
    $req = $db->query('SELECT * FROM buy');



    foreach ($req->fetchAll() as $buy) {
      $list[] = new buyModel($buy['ID'], $buy['entrada'], $buy['sortida'], $buy['hotel'], $buy['horaArribada'], $buy['$horaSortida'], $buy['idUsuari'], $buy['comentari']);
    }

    return $list;
  }

  public static function find($idClient, $idCompra)
  {
    $db = SPDO::singleton();

    $idCompra = intval($idCompra);
    $idClient = intval($idClient);
    $req = $db->prepare('SELECT buy.* FROM buy, user WHERE buy.ID = :idCompra and :idClient = buy.idUsuari and buy.idUsuari = user.ID');

    $req->execute(array('idCompra' => $idCompra, 'idClient' => $idClient));
    $buy = $req->fetch();
    return new buyModel($buy['ID'], $buy['entrada'], $buy['sortida'], $buy['hotel'], $buy['horaArribada'], $buy['horaSortida'], $buy['idUsuari'], $buy['comentari']);
  }


  public static function update($idCompra, $horaArribada, $horaSortida, $comentari)
  {
    $db = SPDO::singleton();

    //$id = intval($id);
    //$horaArribada = intval($horaArribada);      ***** NO POSAR INTVALUE ***** ho transforma en integer i ens interessa agafar el format 'time'.
    //$horaSortida = intval($horaSortida);

    //preparam la query
    $req = $db->prepare('update buy
    set horaArribada = :horaArribada, horaSortida= :horaSortida, comentari = :comentari
    WHERE buy.ID=:idCompra;');

    //executam la query amb els paràmetres que li hem donat
    $req->execute(array('idCompra' => $idCompra, 'horaArribada'=> $horaArribada, 'horaSortida' => $horaSortida, 'comentari' => $comentari));
    $buy = $req->fetch();

    //print_r("<br>" . $idCompra . "<br>" . $horaArribada . "<br>" . $horaSortida . "<br>" . $comentari);

    return new buyModel($buy['ID'], $buy['entrada'], $buy['sortida'], $buy['hotel'], $buy['horaArribada'], $buy['horaSortida'], $buy['idUsuari'], $buy['comentari']);
  }

}
