<?php

require './session_validator.php';
require 'cliente.php';

?>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contratos FC | </title>

        <!-- Bootstrap -->
        <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- iCheck -->
        <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="../build/css/custom.min.css" rel="stylesheet">

    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>Contratos FC</span></a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <div class="profile clearfix">

                            <div class="profile_info">
                                <span>Welcome,</span>
                                <h2></h2>
                            </div>
                        </div>
                        <!-- /menu profile quick info -->

                        <br />

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <h3>General</h3>
                                <ul class="nav side-menu">
                                    <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="index.php">Clientes</a></li>
                                            <li><a href="listarUsuario.php">Usuarios</a></li>

                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="form_validation.php">Cadastrar Paciente</a></li>
                                            


                                        </ul>

                                        </ul>
                                        </ul>
                                </ul>
                            </div>


                        </div>
                        <!-- /sidebar menu -->

                        <!-- /menu footer buttons -->
                        <div class="sidebar-footer hidden-small">
                            <a data-toggle="tooltip" data-placement="top" title="Settings">
                                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Lock">
                                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Logout" href="logout.php">
                                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                            </a>
                        </div>
                        <!-- /menu footer buttons -->
                    </div>
                </div>

                <!-- top navigation -->
                <div class="top_nav">
                    <div class="nav_menu">
                        <nav>
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>

                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">

                                        <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                    </ul>
                                </li>


                    </div>
                </div>
                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="">
                        <div class="page-title">
                            <div class="title_left">
                                <h3><small>Clientes Cadastrados</small></h3>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <form action="index.php">
                            <div class="row">
                                <div class="form-group col-sm-4 col-md-4 col-sm-12 col-xs-12">
                                    <label class="control-label">Data Inicial</label>
                                    <input id="data_inicial" class="form-control" name="data_inicial" type="date" value="<?php echo isset($_GET['data_inicial']) ? $_GET['data_inicial'] :  '' ?>">
                                </div>
                                <div class="form-group col-sm-4 col-md-4 col-sm-12 col-xs-12">
                                    <label class="control-label">Data Final</label>
                                    <input id="data_final" class="form-control" name="data_final" type="date" value="<?php echo isset($_GET['data_final']) ? $_GET['data_final'] :  '' ?>">
                                </div>
                                <div class="form-group col-sm-4 col-md-4 col-sm-12 col-xs-12">
                                    <label class="control-label">&nbsp;</label>
                                    <button class="btn btn-primary form-control" type="submit">Buscar</button>
                                </div>
                        </form>

                        <div class="x_panel">
                            <div class="x_title">
                                <h2> <small></small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Settings 1</a>
                                            </li>
                                            <li><a href="#">Settings 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nome</th>
                                            <th>CPF</th>
                                            <th>E-mail</th>
                                            <th>Cidade</th>
                                            <th>Estado</th>
                                            <th>Valor Contrato</th>
                                            <th>Excluir</th>
                                            <th>Editar</th>
                                            <th>Ativar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                  $clients = (new Cliente())->listar($_GET);
                  foreach ($clients as $i => $client) :
                  ?>
                                            <tr>
                                                <td>
                                                    <?php echo $client['id']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $client['nome']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $client['cpf']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $client['email']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $client['cidade']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $client['estado']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $client['vlcontrato']; ?>
                                                </td>
                                                
                                                <td>
                                                    <form method="post">
                                                        <input type="hidden" name="id" value="<?php echo $client['id']; ?>" />
                                                        <button class="btn btn-danger" type="submit" onclick="deleteAjax('<?php echo $client['id']; ?>')" id="delete" class="text-primary px-2 btn">Excluir</button>
                                                        <a >
                                                    </form>
                                                </td>
                                                <td>
                                                    <form method="post" action="form_update.php">
                                                        <input type="hidden" name="client" value="<?php echo htmlentities(serialize($client)); ?>" />
                                                        <button class="btn btn-primary" type="submit">Editar</button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <div class="col-md-5 col-sm-8">
                                                    
                                                        <button onclick="active('<?php echo $client['active']; ?>', <?php echo $client['id']; ?>)" type="checkbox" id="switch" <?php echo $client['active'] ? "checked" : "" ?> class="js-switch btn"></button>
                                                    
                                                     
                                                    </div>
                                                </td>

                                            </tr>

                                            <?php
                  endforeach;
                  ?>
                                    </tbody>
                                </table>

                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Graficos<small>valor do contrato</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">Settings 1</a>
                                                    </li>
                                                    <li><a href="#">Settings 2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <canvas id="contract_grafic"></canvas>
                                    </div>
                                </div>

                            </div>
                        </div>
                        </div>
                        <!-- /page content -->

                        <!-- footer content -->
                        <footer>
                            <div class="pull-right">
                                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                            </div>
                            <div class="clearfix"></div>
                        </footer>
                        <!-- /footer content -->
                    </div>
                </div>

                <!-- jQuery -->
                <script src="../vendors/jquery/dist/jquery.min.js"></script>
                <!-- Bootstrap -->
                <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                <!-- FastClick -->
                <script src="../vendors/fastclick/lib/fastclick.js"></script>
                <!-- NProgress -->
                <script src="../vendors/nprogress/nprogress.js"></script>
                <!-- iCheck -->
                <script src="../assets/vendor/vendors/iCheck/icheck.min.js"></script>


                <script type="text/javascript">
                    function deleteAjax(id){       
                        $.ajax({ 
                            type:'POST',
                            url:'excluir_cliente.php',
                            data: {id:id},
                            success:function(data){
                            $('#delete');
                            window.location.reload()
                            }
                        });
                    }
                    function active(statusatual, id){
                        var status= 1;
                        if (statusatual == 1) {
                        status = 0;
                        }    
                        $.ajax({ 
                                type:'POST',
                                url:'active.php',
                                data: {status:status, id:id},
                                success:function(data){
                                    var datajson = JSON.parse(data);  
                                    if (status == 1) {
                                    $("#delete").prop("disabled", true); 
                                    }
                                    return;    
                                    window.location.reload()
                                }
                                });
    } 
                </script>

                <!-- Custom Theme Scripts -->
                <script src="../build/js/custom.min.js"></script>
                <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
                <script>
                    var ctx = document.getElementById("contract_grafic");
                    var grafico = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: [
                                <?php
            echo implode(
              ",",
              array_map(function ($client) {
                return trim("\"$client[nome]\"");
              }, $clients)
            );
            ?>
                            ],
                            datasets: [{
                                label: 'Valor Contrato',
                                backgroundColor: "#26B99A",
                                data: [<?php echo implode(",", array_column($clients, "vlcontrato")); ?>]
                            }]
                        },

                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            }
                        }
                    });
                </script>
    </body>

    </html