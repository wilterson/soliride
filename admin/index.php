<?php
/**
 * Created by PhpStorm.
 * User: Wilterson Garcia
 * Date: 26/05/2016
 * Time: 14:00
 */

include_once('config/initialize.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Softcars | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="../assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/dashboard.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <?php
        //Barra Topo
        include_once('includes/barra-topo.php');

        //Menu
        include_once('includes/menu.php');
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Version 1.0</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?= ADMIN ?>index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-green"><i class="ion ion-model-s"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Motoristas Disponíveis</span>
                            <span class="info-box-number">54</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-red"><i class="ion ion-map"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Suas Rotas Cadastradas</span>
                            <span class="info-box-number">3</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix visible-sm-block"></div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="ion ion-ios-location-outline"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Destinos Compativeis</span>
                            <span class="info-box-number">3</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-yellow"><i class="fa fa-check"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Caronas Completas</span>
                            <span class="info-box-number">2</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- Main row -->
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-8">

                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <!-- USERS LIST -->
                    <div class="box box-danger">
                        <div class="box-header with-border">
                            <h3 class="box-title">Últimos Motoristas Cadastrados</h3>

                            <div class="box-tools pull-right">
                                <span class="label label-danger">8 Novos Motoristas</span>
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <ul class="users-list clearfix">
                                <li>
                                    <img src="dist/img/user1-128x128.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">Alexander Pierce</a>
                                    <span class="users-list-date">Today</span>
                                </li>
                                <li>
                                    <img src="dist/img/user8-128x128.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">Norman</a>
                                    <span class="users-list-date">Yesterday</span>
                                </li>
                                <li>
                                    <img src="dist/img/user7-128x128.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">Jane</a>
                                    <span class="users-list-date">12 Jan</span>
                                </li>
                                <li>
                                    <img src="dist/img/user6-128x128.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">John</a>
                                    <span class="users-list-date">12 Jan</span>
                                </li>
                                <li>
                                    <img src="dist/img/user5-128x128.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">Alexander</a>
                                    <span class="users-list-date">13 Jan</span>
                                </li>
                                <li>
                                    <img src="dist/img/user5-128x128.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">Sarah</a>
                                    <span class="users-list-date">14 Jan</span>
                                </li>
                                <li>
                                    <img src="dist/img/user4-128x128.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">Nora</a>
                                    <span class="users-list-date">15 Jan</span>
                                </li>
                                <li>
                                    <img src="dist/img/user3-128x128.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">Nadia</a>
                                    <span class="users-list-date">15 Jan</span>
                                </li>
                            </ul>
                            <!-- /.users-list -->
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer text-center">
                            <a href="javascript:void(0)" class="uppercase">Ver Todos</a>
                        </div>
                        <!-- /.box-footer -->
                    </div>
                    <!--/.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php
        //Footer
        include_once('includes/footer.php');
    ?>


</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src="../assets/plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.js"></script>
<!-- Sparkline -->
<script src="../assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="../assets/plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>