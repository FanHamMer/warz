<?php

include("../dist/include/check.php");
include("../dist/include/dbconfig.php");
$p_name=$_SESSION['p_name'];

?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>WarZ | Обратная связь</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="../dist/css/skins/skin-red-light.min.css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    </head>

    <body class="hold-transition skin-red-light sidebar-mini">
        <div class="wrapper">
            <!-- Main Header -->
            <header class="main-header">
                <!-- Logo -->
                <a href="#" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels --><span class="logo-mini"><b>War</b>Z</span>
                    <!-- logo for regular state and mobile devices --><span class="logo-lg"><b>War</b>Z</span> </a>
                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <span class="sr-only">Переключить навигацию</span> </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Notifications Menu -->
                       
                            <!-- User Account Menu -->
                            <li class="dropdown user user-menu">
                                <!-- Menu Toggle Button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <!-- The user image in the navbar--><img src="../dist/img/skin/<?php echo $p_skin;?>.png" class="user-image" alt="User Image">
                                    <!-- hidden-xs hides the username on small devices so only the image appears. --><span class="hidden-xs"> <?php echo $p_name;?></span> </a>
                                <ul class="dropdown-menu">
                                    <!-- The user image in the menu -->
                                    <li class="user-header"> <img src="../dist/img/skin/<?php echo $p_skin;?>.png" class="img-circle" alt="User Image">
                                        <p>
                                            <?php echo $p_name;?> <small>WarZ ID CARD</small> </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left"> <a href="#" class="btn btn-default btn-flat">Моя информация</a> </div>
                                        <div class="pull-right"> <a href="../dist/include/logout.php" class="btn btn-default btn-flat">Выйти</a> </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                            <li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel">
                        <div class="pull-left image"> <img src="../dist/img/skin/<?php echo $p_skin;?>.png" class="img-circle" alt="User Image"> </div>
                        <div class="pull-left info">
                            <p>
                                <?php echo $p_name;?>
                            </p>
                            <!-- Status --><a href="#"><i class="fa fa-circle text-success"></i> Интернет</a> </div>
                    </div>
                    <!-- Sidebar Menu -->
                    <ul class="sidebar-menu">
                        <li class="header">Меню</li>
                        <!-- Optionally, you can add icons to the links -->
                        <li><a href="index.php"><i class="fa fa-book"></i> <span>Моя информация</span></a></li>
                        <li><a href="backpack.php"><i class="fa fa-archive"></i> <span>Инвентарь</span></a></li>
                        <li><a href="rank.php"><i class="fa fa-heart"></i> <span>Ранжирование</span></a></li>
                        <li><a href="update_log.php"><i class="fa fa-edit"></i> <span>История обновлений</span></a></li>
                        <li><a href="sv_info.php"><i class="fa fa-th"></i> <span>Состояние сервера</span></a></li>
                        <li class="active"><a href="feedback.php"><i class="fa fa-commenting"></i> <span>Обратная связь</span></a></li>
                    </ul>
                    <!-- /.sidebar-menu -->
                </section>
                <!-- /.sidebar -->
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
    피드백
      </h1> </section>
                <div class="pad margin no-print">
                    <div class="callout callout-info" style="margin-bottom: 0!important;">
                        <h4><i class="fa  fa-bullhorn"></i>Слово разработчика:</h4> Благодарим вас за отзыв. ^_^ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Titor 와 Helios 의 Say. </div>
                </div>
                <!-- Main content -->
                <section class="content">
                    <div class="box box-danger">
                        <form action="../dist/include/feedback_add.php" method="POST">
                            <div class="box-header with-border">
                                <h3 class="box-title">Вклад</h3> </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="form-group">
                                            <input type="hidden" name="f_name" value="<?php echo $p_name;?>" class="hide" style="border: 0px;" readonly>
                                            <textarea class="form-control" rows="5" name="f_contents" placeholder="Запишите свои отзывы" required></textarea>
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-danger">Регистрация</button>
                        </form>
                        <br>
                        <br>
                        <br> </div>
                        </div>
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tr>
                                    <th>
                                        <center>Логин</center>
                                    </th>
                                    <th>
                                        <center>Содержание</th>
                                    <th>
                                        <center>Дата</center>
                                    </th>
                                </tr>
                                <?php
                                $sql = "select * from feedback order by f_adddate desc ";
                                $result = mysql_query($sql);
                                 for($i=0; $row = @mysql_fetch_array($result); $i++){
                                ?>
                                    <tr>
                                        <td align="center">
                                            <?php echo $row['f_name']?>
                                        </td>
                                        <td align="center">
                                            <?php echo $row['f_contents']?>
                                        </td>
                                        <td align="center">
                                            <?php echo $row['f_adddate']?>
                                        </td>
                                    </tr>
                                    <?php } ?>
                            </table>
                        </div>
                        <!-- /.box-body -->
                        </div>
                    </div>
            </div>
        </div>
        </section>
        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <!-- Default to the left -->
        <strong>Copyright &copy; 2016 <a href="cafe.daum.net/WarZ">WarZ</a>&nbsp; (developer helios).</strong> All rights reserved. </footer>
        <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->
        <!-- REQUIRED JS SCRIPTS -->
        <!-- jQuery 2.2.3 -->
        <script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../dist/js/app.min.js"></script>

    </html>
