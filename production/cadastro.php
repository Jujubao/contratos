<?php 

    require 'usuario.php';
    $u = new usuario();
    if(isset($_POST['username'])){
        $username = addslashes($_POST['username']);
        $senha = addslashes($_POST['senha']);

        if(!empty($username) && !empty($senha)){

            if($u->msg == ""){
                if($u->cadastrar($username,$senha)){
                    echo "<script language='javascript' type='text/javascript'>alert('O usuario foi cadastrado com sucesso!')</script>";
                    echo "<script language='javascript' type='text/javascript'>window.location.href='login.php'</script>";
                }else{
                    echo "<script language='javascript' type='text/javascript'>alert('O usuario já está cadastrado no sistema. Tente outro!')</script>";
                    echo "<script language='javascript' type='text/javascript'>window.location.href='cadastro.php';</script>";
                }
            }else{
                echo "Erro: ".$u->msg;
            }
        }else {
            echo "<script language='javascript' type='text/javascript'>alert('Preenha todos os campos!')</script>";
            echo "<script language='javascript' type='text/javascript'>window.location.href='cadastro.php';</script>";
        }
    }

?>