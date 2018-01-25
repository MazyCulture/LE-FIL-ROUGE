<?php

class db{
  public $db;
  public function __construct()
  {
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=mayculture;charset=utf8', 'user', 'user');
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            die('Erreur :' . $e->getMessage());
        }
    }

    public function addEmail($email){
      $req=$this->db->prepare("INSERT INTO emails (email) VALUES (?)");
      $req->execute([$email]);
    }

}

 ?>
