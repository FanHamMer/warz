<?php

include("../dist/include/check.php");
include("../dist/include/dbconfig.php");
$p_name=$_SESSION['p_name'];

$backpack_array=array("사과주스","오렌지주스","담배","ID CARD","MY ID CARD","Car Keys","니콜라스의 임무증","9MM","5.56MM","12GAUGE","45ACP","7.62MM","7.92MM","357","303","빵","물","통조림","기름통(30L)","무기상자");
$backpack_contents_array=array("갈증을 조금 해결해준다.","갈증을 조금 해결해준다.","신체 기능을 저하시키지만, 만족도를 올려준다.","이곳 직원의 ID카드이다. 이것으로 많은 건물에 출입을 드나들 수 있다.",
"임시피난소에 들어갈 수 있는 ID CARD이다. 이 카드가 없으면 임시피난소에 접근이 불가능 하다.","무슨 차량인진 모르겠지만, 아마 맞는 차가 있을 것 같다.","니콜라스의 임무증이다.","총기에 사용되는 총알이다.",
"총기에 사용되는 총알이다.","총기에 사용되는 총알이다.","총기에 사용되는 총알이다.","총기에 사용되는 총알이다.","총기에 사용되는 총알이다.","총기에 사용되는 총알이다.","총기에 사용되는 총알이다.",
"먹으면 포만감을 조금 채워줄 것 같다.","마시면 갈증을 조금 채워줄 것 같다.","먹으면 포만감을 조금 채워줄 것 같다.","30리터 용량인 기름통이다.","알 수 없는 무기가 들어있는 상자이다.");

$item_w=array("1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","2","3","2","5","1","50","50","100","30","150","200","200","180","500");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>WarZ | 가방</title>
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
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>War</b>Z</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>War</b>Z</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Переключить навигацию</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">


          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">1</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">У вас есть 1 уведомление.</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> WarZ InfoWeb был разработан.
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">Просмотреть все</a></li>
            </ul>
          </li>

          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="../dist/img/skin/<?php echo $p_skin;?>.png" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"> <?php echo $p_name;?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="../dist/img/skin/<?php echo $p_skin;?>.png" class="img-circle" alt="User Image">

                <p>
                  <?php echo $p_name;?>
                  <small>WarZ ID CARD</small>
                </p>
              </li>

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Моя информация</a>
                </div>
                <div class="pull-right">
                  <a href="../dist/include/logout.php" class="btn btn-default btn-flat">Выйти</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </li>
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
        <div class="pull-left image">
          <img src="../dist/img/skin/<?php echo $p_skin;?>.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $p_name;?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Интернет</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">Меню</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="index.php"><i class="fa fa-book"></i> <span>Моя информация</span></a></li>
        <li class="active"><a href="backpack.php"><i class="fa fa-archive"></i> <span>Инвентарь</span></a></li>
        <li><a href="rank.php"><i class="fa fa-heart"></i> <span>Ранжирование</span></a></li>
        <li><a href="update_log.php"><i class="fa fa-edit"></i> <span>История обновлений</span></a></li>
        <li><a href="sv_info.php"><i class="fa fa-th"></i> <span>Состояние сервера</span></a></li>
        <li><a href="feedback.php"><i class="fa fa-commenting"></i> <span>Обратная связь</span></a></li>

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>Инвентарь</h1>

<div class="pad margin no-print">
      <div class="callout callout-info" style="margin-bottom: 0!important;">
        <h4><i class="fa fa-info"></i> Инструкции:</h4>
        Элементы, которые у вас отсутствуют, не отображаются.
      </div>
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="row">
            <div class="col-xs-12">
              <div class="box box-danger">
                <div class="box-header">
                  <h3 class="box-title">Мой список предметов</h3>

                  <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                    </div>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">

                                        <tr>
                                          <th>Название</th>
                                          <th>Номер</th>
                                          <th>Причина</th>
                                        </tr>
                                          <?php if($row['item_0'] == 0) { } else {?>
                                        <tr>
                                          <!-- название -->  <td>Яблочный сок</td>
                                            <!-- номер -->  <td><?php echo $row['item_0']?></td>
                                          <td>  <span class="label label-success">Еда</span> </td>
                                        <!-- объяснение -->    <td>Это решает небольшую жажду.</td>
                                      </tr><?php } ?>
                                        <?php if($row['item_1'] == 0) { } else {?>
                                        <tr>
                                          <!-- 이름 -->  <td>Апельсин</td>
                                            <!-- 갯수 -->  <td><?php echo $row['item_1']?></td>
                                          <td>  <span class="label label-success">Еда</span> </td>
                                        <!-- 설명 -->    <td>Это решает небольшую жажду.</td>
                                      </tr><?php } ?>
                                        <?php if($row['item_2'] == 0) { } else {?>
                                          <!-- 이름 -->  <td>Табак</td>
                                            <!-- 갯수 -->  <td><?php echo $row['item_2']?></td>
                                          <td>  <span class="label label-primary">Дым</span> </td>
                                        <!-- 설명 -->    <td>Уменьшает функцию тела, но увеличивает удовлетворение.</td>
                                      </tr><?php } ?>
                                        <?php if($row['item_3'] == 0) { } else {?>
                                          <!-- 이름 -->  <td>ID CARD</td>
                                            <!-- 갯수 -->  <td><?php echo $row['item_3']?></td>
                                          <td>  <span class="label label-warning">Карта</span> </td>
                                        <!-- 설명 -->    <td>Это идентификационная карточка сотрудника. Это позволяет получить доступ ко многим зданиям.</td>
                                      </tr><?php } ?>
                                        <?php if($row['item_4'] == 0) { } else {?>
                                          <!-- 이름 -->  <td>MY ID CARD</td>
                                            <!-- 갯수 -->  <td><?php echo $row['item_4']?></td>
                                          <td>  <span class="label label-warning">Карта</span> </td>
                                        <!-- 설명 -->    <td>Это идентификационная карточка, которая может войти в временное убежище. Без этой карты доступ к временному убежищу невозможен.</td>
                                      </tr><?php } ?>
                                        <?php if($row['item_5'] == 0) { } else {?>
                                          <!-- 이름 -->  <td>Car Keys</td>
                                            <!-- 갯수 -->  <td><?php echo $row['item_5']?></td>
                                          <td>  <span class="label label-warning">Ключ</span> </td>
                                        <!-- 설명 -->    <td>Я не знаю, что это за автомобиль, но, похоже, это правильный автомобиль.</td>
                                      </tr><?php } ?>
                                        <?php if($row['item_6'] == 0) { } else {?>
                                          <!-- 이름 -->  <td>Заявление Николаса</td>
                                            <!-- 갯수 -->  <td><?php echo $row['item_6']?></td>
                                          <td>  <span class="label label-warning">Карта</span> </td>
                                        <!-- 설명 -->    <td>Это миссия Николая.</td>
                                      </tr><?php } ?>
                                        <?php if($row['item_7'] == 0) { } else {?>
                                          <!-- 이름 -->  <td>9MM</td>
                                            <!-- 갯수 -->  <td><?php echo $row['item_7']?></td>
                                          <td>  <span class="label label-danger">пуля</span> </td>
                                        <!-- 설명 -->    <td>Это пуля, используемая в огнестрельном оружии.</td>
                                      </tr><?php } ?>
                                        <?php if($row['item_8'] == 0) { } else {?>
                                          <!-- 이름 -->  <td>5.56MM</td>
                                            <!-- 갯수 -->  <td><?php echo $row['item_8']?></td>
                                          <td>  <span class="label label-danger">пуля</span> </td>
                                        <!-- 설명 -->    <td>Это пуля, используемая в пистолете.</td>
                                      </tr><?php } ?>
                                        <?php if($row['item_9'] == 0) { } else {?>
                                          <!-- 이름 -->  <td>12GAUGE</td>
                                            <!-- 갯수 -->  <td><?php echo $row['item_9']?></td>
                                          <td>  <span class="label label-danger">пуля</span> </td>
                                        <!-- 설명 -->    <td>Это пуля, используемая в огнестрельном оружии.</td>
                                      </tr><?php } ?>
                                        <?php if($row['item_10'] == 0) { } else {?>
                                          <!-- 이름 -->  <td>45ACP</td>
                                            <!-- 갯수 -->  <td><?php echo $row['item_10']?></td>
                                          <td>  <span class="label label-danger">пуля</span> </td>
                                        <!-- 설명 -->    <td>Это пуля, используемая в огнестрельном оружии.</td>
                                      </tr><?php } ?>
                                        <?php if($row['item_11'] == 0) { } else {?>
                                          <!-- 이름 -->  <td>7.62MM</td>
                                            <!-- 갯수 -->  <td><?php echo $row['item_11']?></td>
                                          <td>  <span class="label label-danger">bullet</span> </td>
                                        <!-- 설명 -->    <td>Это пуля, используемая в огнестрельном оружии.</td>
                                      </tr><?php } ?>
                                        <?php if($row['item_12'] == 0) { } else {?>
                                          <!-- 이름 -->  <td>7.92MM</td>
                                            <!-- 갯수 -->  <td><?php echo $row['item_12']?></td>
                                          <td>  <span class="label label-danger">bullet</span> </td>
                                        <!-- 설명 -->    <td>Это пуля, используемая в огнестрельном оружии.</td>
                                      </tr><?php } ?>
                                        <?php if($row['item_13'] == 0) { } else {?>
                                          <!-- 이름 -->  <td>357</td>
                                            <!-- 갯수 -->  <td><?php echo $row['item_13']?></td>
                                          <td>  <span class="label label-danger">bullet</span> </td>
                                        <!-- 설명 -->    <td>Это пуля, используемая в огнестрельном оружии.</td>
                                      </tr><?php } ?>
                                        <?php if($row['item_14'] == 0) { } else {?>
                                          <!-- 이름 -->  <td>303</td>
                                            <!-- 갯수 -->  <td><?php echo $row['item_14']?></td>
                                          <td>  <span class="label label-danger">bullet</span> </td>
                                        <!-- 설명 -->    <td>Это пуля, используемая в огнестрельном оружии.</td>
                                      </tr> <?php }?>
                                        <?php if($row['item_15'] == 0) { } else {?>
                                          <!-- 이름 -->  <td>Хлеб</td>
                                            <!-- 갯수 -->  <td><?php echo $row['item_15']?></td>
                                          <td>  <span class="label label-success">Еда</span> </td>
                                        <!-- 설명 -->    <td>Если вы едите, похоже, здоровье немного наполнится.</td>
                                        </tr>
                                        <?php } ?><?php if($row['item_16'] == 0) { } else {?>
                                          <!-- 이름 -->  <td>물</td>
                                            <!-- 갯수 -->  <td><?php echo $row['item_16']?></td>
                                          <td>  <span class="label label-success">Еда</span> </td>
                                        <!-- 설명 -->    <td>마시면 갈증을 조금 채워줄 것 같다.</td>
                                      </tr> <?php } ?>
                                      <?php if($row['item_17'] == 0) { } else {?>
                                          <!-- 이름 -->  <td>Консервы</td>
                                            <!-- 갯수 -->  <td><?php echo $row['item_17']?></td>
                                          <td>  <span class="label label-success">Еда</span> </td>
                                        <!-- 설명 -->    <td>Если вы едите, похоже, здоровье немного наполнится.</td>
                                        </tr>
                                        <?php } ?>
                                        <?php if($row['item_18'] == 0) { } else {?>
                                          <!-- 이름 -->  <td>Масляный картер (30 л)</td>
                                            <!-- 갯수 -->  <td><?php echo $row['item_18']?></td>
                                          <td>  <span class="label label-primary">gasoline</span> </td>
                                        <!-- 설명 -->    <td>Это масляный картер мощностью 30 литров.</td>
                                      </tr><?php } ?>
                                        <?php if($row['item_19'] == 0) { } else {?>
                                          <!-- 이름 -->  <td>Коробка для оружия</td>
                                            <!-- 갯수 -->  <td><?php echo $row['item_19']?></td>
                                          <td>  <span class="label label-danger">пуля</span> </td>
                                        <!-- 설명 -->    <td>Это ящик с неизвестным оружием.</td>
                                      </tr><?php } ?>
                                      </table>
                                    </div>
                                    <!-- /.box-body -->
                                  </div>
                                  <!-- /.box -->
                                </div>
                              </div>



    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->

    <!-- Default to the left -->
  <strong>Translated to Russia by <a href="fanhammer.ru">FanHamMer</a>. 2017&nbsp.</strong>
  <strong>Copyright &copy; 2016 <a href="cafe.daum.net/WarZ">WarZ</a>&nbsp; (developer helios).</strong> All rights reserved.
  </footer>


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
