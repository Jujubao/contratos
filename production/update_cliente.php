<?php
require 'cliente.php';


if($_POST['id']) {
    $nome = addslashes($_POST['nome']);
    $cpf = addslashes($_POST['cpf']);
    $cidade = addslashes($_POST['cidade']);
    $estado = addslashes($_POST['estado']);
    $email = addslashes($_POST['email']);
    $vlcontrato = addslashes($_POST['vlcontrato']);
    $client =  new Cliente();
    $client->update($_POST['id'],$nome,$cpf,$cidade,$estado,$email,$vlcontrato);
    echo "<script language='javascript' type='text/javascript'>alert('Dados atualizados!')</script>";
                    echo "<script language='javascript' type='text/javascript'>window.location.href='index.php';</script>";
}