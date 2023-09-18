<?php

class conexao{
    private $host = "localhost";
    private $usuario = "root";
    private $senha ="";
    private $banco = "projeto";
    public $conn;

    public function getconnection(){
        $this->com = null;

        try{
            $this->conn = new PDO("mysql:host=". $this->host.";dbname=".$this->banco,$this->usuario,$this->senha);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo"erro de conexao:".$e->getMessage();
        }
        return $this->conn;
    }
}