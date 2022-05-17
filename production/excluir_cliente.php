<?php
require 'cliente.php';

if($_POST['id']) {
    $client =  new Cliente();
    $client->excluir($_POST['id']);
    echo "<script language='javascript' type='text/javascript'>alert('Cliente excluiso!')</script>";
                    echo "<script language='javascript' type='text/javascript'>window.location.href='index.php';</script>";
}
