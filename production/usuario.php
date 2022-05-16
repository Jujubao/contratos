
<?php
    require 'conexao.php';
    Class Usuario{
            
        private $pdo;
        public $msg = "";

        public function __construct()
        {
            $this->pdo = (new Conexao())->conectar();
        } 
        
        public function cadastrar($USERNAME,$senha){
            $senhaMD5=MD5($senha);
            //  Verifica se já existe
            $sql = $this->pdo -> prepare("SELECT ID FROM usuario WHERE USERNAME = '$USERNAME'");
            $sql->execute();
            if($sql->rowCount() > 0){
                // já existe
                return false;
            }else{
                // não existe, cadastrar
                $sql = $this->pdo->prepare("INSERT INTO usuario (USERNAME,senha) VALUES ('$USERNAME','$senhaMD5')");
                $sql->execute();
                return true;
            }
            
        }

        public function logar($USERNAME,$senha){
            global $pdo;
            $senhaMD5=MD5($senha);
            // //  Verifica se está cadastrado
            $sql = $pdo->prepare("SELECT ID FROM usuario WHERE USERNAME = '$USERNAME' AND senha = '$senhaMD5'");
            $sql->execute();
            if($sql->rowCount() > 0){
                // está cadastrado
                $dado = $sql -> fetch();
                session_start();
                $_SESSION['ID'] = $dado['ID'];
                return true;
            }else{
                // não está cadastrado
                return false;
            }
        }
    }

    

?>