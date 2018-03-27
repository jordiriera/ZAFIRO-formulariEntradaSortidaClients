<?php
class userModel
{
    protected $db;

     public $ID;
     public $name;
     public $surname1;
     public $surname2;
     public $telephone;


    public function __construct($ID, $name, $surname1, $surname2, $telephone)
    {
        $this->ID = $ID;
        $this->name = $name;
        $this->surname1 = $surname1;
        $this->surname2 = $surname2;
        $this->telephone = $telephone;
    }


    public static function getAll()
    {
        $list = [];
        $db = SPDO::singleton();
        $req = $db->query('SELECT * FROM user');



        foreach ($req->fetchAll() as $usuari) {
            $list[] = new userModel($usuari['ID'], $usuari['name'], $usuari['surname1'], $usuari['surname2'], $usuari['telephone']);
        }

        return $list;
    }

    public static function find($ID)
    {
      $db = SPDO::singleton();

      $id = intval($ID);
      $req = $db->prepare('SELECT * FROM user WHERE user.ID = :ID');

      $req->execute(array('ID' => $ID));
      $usuari = $req->fetch();
      return new userModel($usuari['ID'], $usuari['name'], $usuari['surname1'], $usuari['surname2'], $usuari['telephone']);
    }

    public static function update($id, $telephone)
    {
      $db = SPDO::singleton();
      $id = intval($id);

      $req = $db->prepare('update user
                           set telephone = :telephone
                           WHERE user.ID=:id;');

      $req->execute(array('id' => $id, 'telephone'=> $telephone));
      $usuari = $req->fetch();

      //print_r('<br>' .'MODEL' . $id . '  ' . $telephone);

      return new userModel($usuari['ID'], $usuari['name'], $usuari['surname1'], $usuari['surname2'], $usuari['telephone']);
    }

}
