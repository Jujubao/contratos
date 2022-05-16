<?php
require 'conexao.php';
class Cliente
{
    private $pdo;
    public function __construct()
    {
        $this->pdo = (new Conexao())->conectar();
    }

    public function cadastrar(
        $nome,
        $cpf,
        $cidade,
        $estado,
        $email,
        $vlcontrato
    ) {
        $sql = $this->pdo->prepare("INSERT INTO cliente (nome,cpf,cidade,estado,email,vlcontrato) VALUES ('$nome','$cpf','$cidade','$estado','$email','$vlcontrato')");
        $sql->execute();
        return true;
    }
    public function listar(array $filters = [])
    {
        $sql = "SELECT * FROM cliente";

        if (!empty($filters['data_inicial']) || !empty($filters['data_final'])) {
            $sql .= " WHERE ";
            $data_inicial_definida = false;

            if (!empty($filters['data_inicial'])) {
                $sql .= " data_criacao >= '$filters[data_inicial] 00:00:00'";
                $data_inicial_definida = true;
            }

            if (!empty($filters['data_final'])) {
                if ($data_inicial_definida) {
                    $sql .= " AND ";
                }
                $sql .= " data_criacao <= '$filters[data_final] 23:59:59'";
            }
        }

        $sql = $this->pdo->prepare($sql);

        $sql->execute();
        $result = $sql->fetchAll();
        
        return $result;
    }
    public function excluir(int $id)
    {
        
        $sql = $this->pdo->prepare("DELETE FROM cliente WHERE id=$id");
        $sql->execute();
    }

    public function update(
        $id,
        $nome,
        $cpf,
        $cidade,
        $estado,
        $email,
        $vlcontrato
    ) {
        $sql = $this->pdo->prepare("UPDATE cliente set nome = '$nome', cpf='$cpf',cidade='$cidade',estado='$estado',email='$email',vlcontrato='$vlcontrato' WHERE id = $id");
        $sql->execute();
        return true;
    }
    public function active(
        $id,
        $active
    ) {
        $sql = $this->pdo->prepare("UPDATE cliente set active = '$active' WHERE id = $id");
        $sql->execute();
        return true;
    }
}