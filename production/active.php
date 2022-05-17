<?php
require 'cliente.php';


if($_POST['id']) {
    
    $active = addslashes($_POST['active']);
    $client =  new Cliente();
    $client->active($_POST['id'],$active);
    echo "<script language='javascript' type='text/javascript'>alert('Dados atualizados!')</script>";
                    echo "<script language='javascript' type='text/javascript'>window.location.href='index.php';</script>";
}