<?php

session_start();

if(!isset($_SESSION['login']))//não está logado
 echo '<script>top.location.href="../login.php";</script>';

 ?>

<!DOCTYPE html>
<html lang="pt-br">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ControlCar</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    <script src="../dist/js/sb-admin-2.js"></script>
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>
    <script src="../js/ajax.js"></script>


</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">ControlCar</a>
            </div>

 <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                      
            
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       


                         <?php  if($_SESSION['tipo'] == 'U'){



echo "
             
                 
                        <li>
                            <a href='#'><i class='fa fa-pencil  fa-fw'></i> Cadastros<span class='fa arrow'></span></a>
                            <ul class='nav nav-second-level'>
                            	<li>
                                    <a href='cad_clientes.php'>Cadastro de clientes</a>
                                </li>
                                <li>
                                    <a href='cad_usuarios.php'>Cadastro de usuários</a>
                                </li>
                                  <li>
                                    <a href='cad_carros.php'>Cadastro de carros</a>
                                </li>
                                 <li>
                                    <a href='cad_itens.php'>Cadastro de itens</a>
                                </li>

                            </ul>
                            <!-- /.nav-second-level -->
                        </li>


                         <li>
                            <a href='#'><i class='fa  fa-wrench  fa-fw'></i>Atendimento ao cliente<span class='fa arrow'></span></a>
                            <ul class='nav nav-second-level'>
                            	<li>
                                    <a href='agendamentos.php'>Agendamentos</a>
                                </li>
                                <li>
                                    <a href='orcamentos.php'>Orçamentos</a>
                                </li>
                                <li>
                                    <a href='os.php'>Ordens de serviço</a>
                                </li>

                            </ul>
                            <!-- /.nav-second-level -->
                        </li>


                        <li>
                            <a href='lembretes.php'><i class='fa fa-envelope-o fa-fw'></i>Lembretes</a>
                        </li>
                         <li class='divider'></li>

";}


if($_SESSION['tipo'] == 'C'){



echo"
                        

                         <li>
                            <a href='cli_agendamentos.php'><i class='fa fa-calendar   fa-fw'></i>Agendamentos</a>
                        </li>
                         <li>
                            <a href='cli_orcamentos.php'><i class='fa  fa-file-o  fa-fw'></i>Orçamentos</a>
                        </li>
                        <li>
                            <a href='cli_os.php'><i class='fa fa-check-square-o fa-fw'></i>Ordens de serviço</a>
                        </li>
                        <li>
                            <a href='cli_lembretes.php'><i class='fa  fa-envelope-o   fa-fw'></i>Lembretes</a>
                        </li>


";
                    }

                     ?>
                    </ul>
                    

                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
</div>
  
<div id="page-wrapper">

