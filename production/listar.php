<?php
    require 'conexao.php';
    Class Cliente{

        private $pdo;
        public function __construct()
        {
            $this->pdo = (new Conexao())->conectar();
        } 
        public function listar($nome,$cpf,$cidade,$estado,$email,$vlcontrato,$active){
                // não existe, cadastrar
                $sql = $this->pdo->prepare("SELECT nome,cpf,cidade,estado,email,vlcontrato FROM cliente");

                $sql->execute();
                $result = $sql->fetchAll();
                print_r($result);

            }
            
        }