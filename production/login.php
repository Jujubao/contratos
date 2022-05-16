<?php

session_start();

if (isset($_SESSION['ID'])) {
  header('Location: index.php');
  die();
}

require_once 'usuario.php';
$u = new usuario();

if (isset($_POST['login'])) {
  $username = addslashes($_POST['login']);
  $senha = addslashes($_POST['senha']);
  /*echo "login: ".$login.", senha: ".$senha;
        echo "";*/

  if (!empty($username) && !empty($senha)) {
    //echo "msg: ".$msg;
    if ($u->msg == "") {
      if ($u->logar($username, $senha)) {
        $_COOKIE['login'] = $_POST['login'];
        echo "variavel global: " . $_COOKIE['login'];
        header("location: index.php");
      } else {
        echo "<script language='javascript' type='text/javascript'>alert('Não foi possivel logar no sistema!')</script>";
        echo "<script language='javascript' type='text/javascript'>window.location.href='login.php';</script>";
      }
    } else {
      echo "Erro: " . $u->msg;
    }
  } else {
    echo "<script language='javascript' type='text/javascript'>alert('Preenha todos os campos!')</script>";
    echo "<script language='javascript' type='text/javascript'>window.location.href='login.php';</script>";
  }
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Contrato FC | </title>

  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- Animate.css -->
  <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
  <div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
          <form action="login.php" method="POST">
            <h1>Login Form</h1>
            <div>
              <input type="text" name="login" class="form-control" placeholder="Username" required="" />
            </div>
            <div>
              <input type="password" name="senha" class="form-control" placeholder="Password" required="" />
            </div>
            <div>
              <input type="submit" value="entrar" id="entrar" name="entrar">


            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <p class="change_link">New to site?
                <a href="#signup" class="to_register"> Create Account </a>
              </p>

              <div class="clearfix"></div>
              <br />

              <div>
                <h1><i class="fa fa-paw"></i> Contrato FC</h1>
                <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
              </div>
            </div>
          </form>
        </section>
      </div>

      <div id="register" class="animate form registration_form">
        <section class="login_content">
          <form action="cadastro.php" method="post">
            <h1>Create Account</h1>
            <div>
              <input type="text" id="username" class="form-control" placeholder="Username" required="" name="username" />
            </div>

            <div>
              <input type="password" id="senha" class="form-control" placeholder="Password" required="" name="senha" />
            </div>

            <div>
              <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <p class="change_link">Already a member ?
                <a href="#signin" class="to_register"> Log in </a>
              </p>

              <div class="clearfix"></div>
              <br />

              <div>
                <h1><i class="fa fa-paw"></i> Contrato FC</h1>
                <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
              </div>
            </div>
          </form>
        </section>
      </div>
    </div>
  </div>
</body>

</html>