<?php
namespace App\Db;

use \PDO;

class Database{
    const HOST = "localhost";
    const NAME = "wdev_vagas";
    const USER = "root";
    const PASS = "";
     private $table;
     /**
      * Instancia de conexao 
      */
     private $connection;
     public function __construct($table = null)
     {
         $this->table = $table;
         $this->setConnection();
     }
     private function setconnection(){
         try{
            $this->connection = new PDO("mysql:host='host=")
         }catch(\PDOException $e){
             die("ERROR: ".$e->getMessage());
         }

     }
}