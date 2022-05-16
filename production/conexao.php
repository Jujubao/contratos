<?php

class Conexao{
    protected $dbname = 'cliente';
    protected $host = 'localhost';
    protected $username = 'root';
    protected $senha = '';



    public function conectar(){
        global $pdo;
        $dsn = "mysql:host=$this->host;dbname=$this->dbname";
        try {                
            $pdo = new PDO($dsn, $this->username, $this->senha);
            
        } catch (PDOException $erro) {
            global $msg;
            $msg = $erro->getMessage();
        }
        return $pdo;  
    }
}
