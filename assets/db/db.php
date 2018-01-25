<?php

class db{
  public $db;
  public function __construct()
  {
        try {
            $this->db = new PDO('pgsql:host=ec2-54-217-245-53.eu-west-1.compute.amazonaws.com;dbname=dd71r1onf40mdo', 'mzflwkvrcjudec', '677f0615c9958dc4f2e07b467dd5aecee7257e41f7fd37a25d6d43b1fd2460a8');
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
