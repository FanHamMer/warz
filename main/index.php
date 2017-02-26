<?php

include("../dist/include/check.php");
include("../dist/include/dbconfig.php");
$p_name=$_SESSION['p_name'];

// 총기 배열
/*$weapon_arrays[0]="Remington 870";
$weapon_arrays[1]="tula RMB-93"
$weapon_arrays[2]="Winchester 1300";
$weapon_arrays[3]="H&K UMP45";
$weapon_arrays[4]="MP7A1";
$weapon_arrays[5]="Steyr TMP";
$weapon_arrays[6]="M1911A1";
$weapon_arrays[7]="Lee Enfield";
$weapon_arrays[8]="Mosin-Nagant";
$weapon_arrays[9]="Makarov PB";
$weapon_arrays[10]="M16A1";
$weapon_arrays[11]="Beretta 92";
$weapon_arrays[12]="Glock 17";
$weapon_arrays[13]="FN FAL";
$weapon_arrays[14]="Kar98K";
$weapon_arrays[15]="Colt Python";
$weapon_arrays[16]="mossberg 930 SPX";
$weapon_arrays[17]="M9";
$weapon_arrays[18]="Baseball Bat";
$weapon_arrays[19]="Crossbow";
$weapon_arrays[20]="보유 총기 없음";*/

$weapon_arrays=array("Remington 870","tula RMB-93","Winchester 1300","H&K UMP45","MP7A1","Steyr TMP","M1911A1","Lee Enfield","Mosin-Nagant","makarovPB","M16A1","Beretta 92","Glock 17","FN FAL","Kar98K","Colt Python","Mossberg 930 SPX","M9","Baseball bat","Crossbow","보유 무기 없음");

// 총기 이미지 이름 설명
$weapon_arrays_content[0]="<img src='../dist/img/gun/remington870.jpg'><br/><b>Remington 870</b><br/>미국 Remington사에서 제작한 산탄총.<br/>강도가 강하고 사용이 편하나, 장탄 수가 적은 단점이있다.";
$weapon_arrays_content[1]="<img src='../dist/img/gun/RMB-93.jpg'><br/><b>tula RMB-93</b><br/>러시아 전투용 샷건.<br/>가볍고 특이한 점은 다른 산탄총과 달리 전진-후퇴방식으로 장전한다.";
$weapon_arrays_content[2]="<img src='../dist/img/gun/winchester-1300.jpg'><br/><b>Winchester 1300</b><br/>Winchester 사에서 제작한 산탄총.\n 장탄수도 작은편이 아니고 내구성도 좋아 많은 사람이 사용했었다.";
$weapon_arrays_content[3]="<img src='../dist/img/gun/ump45.jpg'><br/><b>H&K UMP45</b><br/>독일에서 제작된 기관단총\nMP5가 많은 기관과 군에서 사용된 이래 9mm 탄의 저지력 문제가 대두되자, 이를 해결하기 위해 같은 권총탄 내에서도 9mm보다는 쪼금 더 위력이 강한 45구경 ACP탄을 사용한 SMG를 만들기로 한 것이다.\n그 결과 나온 것이 UMP45다.";
$weapon_arrays_content[4]="<img src='../dist/img/gun/mp7a1.jpg'><br/>MP7A1<br/>FN이 개발한 P90의 대항마.\n폴란드 기관단총 PM-63을 모티브로 제작되었으며,  기동성과 가벼운 무게가 특징이다.";
$weapon_arrays_content[5]="<img src='../dist/img/gun/Steyr-TMP.jpg'><br/><b>Steyr TMP</b><br/>오스트리아에서 제작된 기관단총.\n20~21세기총기로 평균적으로 쓸만한 총기.";
$weapon_arrays_content[6]="<img src='../dist/img/gun/m1911a1.jpg'><br/><b>M1911A1</b><br/>M1911(United States Pistol, Caliber.45, M1911)\n 45ACP 탄을 쓰는 미국의 군용 권총이며, 1911년 존 브라우닝에 의해 설계되었고 1986년 까지 미군 제식 권총으로 사용되었다.";
$weapon_arrays_content[7]="<img src='../dist/img/gun/lee_endfield.jpg'><br/><b>Lee Enfield</b><br/>1895년 영국에서 개발된 볼트 액션 소총.\n현재 지금 까지도 영국 제식 소총으로 사용되고 있으며, 명중률이 높아 스코프를 이용해 저굑 소총으로 사용하기도 한다.";
$weapon_arrays_content[8]="<img src='../dist/img/gun/MosinNagant.jpg'><br/><b>Mosin-Nagant</b><br/>19세 말 러시아서 제작되고 한국 전쟁까지 쓰인 소비에트 연방 주력 무기.\n 수동작동식으로 장탄수는 5발이며 명중률이 높아 2차 세계대전 당시 소련 저격병들에 의해 애용되기도 했다.";
$weapon_arrays_content[9]="<img src='../dist/img/gun/makarovPB.jpg'><br/><b>Makarov PB</b><br/>19세 말 러시아서 제작되고 한국 전쟁까지 쓰인 소비에트 연방 주력 무기.\n 수동작동식으로 장탄수는 5발이며 명중률이 높아 2차 세계대전 당시 소련 저격병들에 의해 애용되기도 했다.";
$weapon_arrays_content[10]="<img src='../dist/img/gun/M16A1.jpg'><br/><b>M16A1</b><br/>아말라이트 AR-15 군용 개량형으로, 미군의 주력 제식소총.\n베트남 전쟁을 계기로 M14 소총을 밀어내고 주력 소총으로 자리잡았다.";
$weapon_arrays_content[11]="<img src='../dist/img/gun/beretta92.jpg'><br/><b>Beretta 92</b><br/>이탈리아 베레타 사의 권총.\n1972년 설계되었으며, 현재까지 쓰이고 미군의 제식 권총인 M9권총으로 유명하다.";
$weapon_arrays_content[12]="<img src='../dist/img/gun/glock-17.jpg'><br/><b>Glock 17</b><br/>오스트리아 글록사에서 생산된 플라스틱 권총.\n1980년 초에 처음 등장하였으며, 오스트리아, 스웨덴, 노르웨이 군에 제식 채용되어 사용 중이다.";
$weapon_arrays_content[13]="<img src='../dist/img/gun/fn_fal.jpg'><br/><b>FN FAL</b><br/>냉전 중 벨기에 파브리크 나시오날 드 에르스탈 사에 의해 개발된 소총.\n2차 세계대전 후 가장 성공적인 군용 소총 중 하나이다.";
$weapon_arrays_content[14]="<img src='../dist/img/gun/kar98k.png'><br/><b>Kar98K</b><br/>1935년 독일 국방군에 의해 제식소총으로 채택된 볼트액션 소총.\n1945년 종전까지 핵심적인 독일 제식소총 역할을 했다.";
$weapon_arrays_content[15]="<img src='../dist/img/gun/colt_python.jpg'><br/><b>Colt Python</b><br/>1955년 생산된 6연발 .357구경 리볼버.\n명품 브랜드 라인업 중 최초이며 뱀 이름을 붙이는데 재미붙인 콜트는 이후 생산 되는 리볼버에 뱀 이름을 붙이기 시작한다.";
$weapon_arrays_content[16]="<img src='../dist/img/gun/Mossberg930_7.jpg'><br/><b>Mossberg 930 SPX</b><br/>O.F Mossberg & Sons에서 디자인 된 12구경 반자동 산탄총.\n사냥꾼과 스키트 사격 선수에 의해 사용되는 가장 인기있는 자동 산탄총 중 하나이다.";
$weapon_arrays_content[17]="<img src='../dist/img/gun/m9.jpg'><br/><b>M9</b><br/>미군이 채용하여 사용하고있는 대검.\n찌르고 휘둘고 유용하게 사용이 가능하다.";
$weapon_arrays_content[18]="<img src='../dist/img/gun/bat.jpg'><br/><b>Baseball Bat</b><br/>나무로 된 방망이";
$weapon_arrays_content[18]="<img src='../dist/img/gun/crossbow.jpg'><br/><b>Crossbow</b><br/>좀비를 조용하고 안전하게 죽이는 데 최적화된 무기이다.";
$weapon_arrays_content[20]="보유 총기 없음";

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>WarZ | 홈</title>
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
        <span class="sr-only">Toggle navigation</span>
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
              <li class="header">1개의 알림이 있습니다.</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> WarZ 인포웹이 개발 되었습니다.
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">모두 보기</a></li>
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
                  <a href="#" class="btn btn-default btn-flat">내정보</a>
                </div>
                <div class="pull-right">
                  <a href="../dist/include/logout.php" class="btn btn-default btn-flat">로그아웃</a>
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
          <a href="#"><i class="fa fa-circle text-success"></i> 온라인</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">메뉴</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"> <a href="#"><i class="fa fa-book"></i> <span>내정보</span></a></li>
        <li><a href="backpack.php"><i class="fa fa-archive"></i> <span>가방</span></a></li>
        <li><a href="update_log.php"><i class="fa fa-edit"></i> <span>업데이트 내역</span></a></li>
        <li><a href="sv_info.php"><i class="fa fa-th"></i> <span>서버 현황</span></a></li>
        <li><a href="feedback.php"><i class="fa fa-commenting"></i> <span>피드백</span></a></li>

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
    <?php if ($p_tutorial == 0) { echo "내정보 (튜토리얼 미완료)<br/>"; echo "<font size='2'>"; echo "아래 정보가 정상적으로 표시 되지 않습니다. 튜토리얼을 완료 해주세요."; echo "</font>";} else { echo "내정보";} ?>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-danger">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="../dist/img/skin/<?php
               echo $p_skin;?>.png" alt="<?php echo $p_skin;?>">

              <h3 class="profile-username text-center"><?php echo $p_name;?></h3>

              <p class="text-muted text-center">임시 피난소 피난민</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>체력</b> <a class="pull-right"><?php echo $p_health;?></a>
                </li>
                <li class="list-group-item">
                  <b>성별</b> <a class="pull-right">
                  <?php
                  if ($p_gender==1) { echo "남성";} else if ($p_gender==2){ echo "여성";} else { echo"튜토리얼 미완료";}?>
                  </a>
                </li>
                <li class="list-group-item">
                  <b>스킨번호</b> <a class="pull-right"><?php echo $p_skin;?></a>
                </li>
                <li class="list-group-item"> <!--보유 총기 -->
                  <b><?php for($count = -1; $count <=19; $count++){
                    if ($p_weapontype == $count) { echo $weapon_arrays[$count]; }
                  }?>&nbsp;<font size="0.7">(총알/탄창)</font></b> <a class="pull-right"><?php echo $p_ammo;?>/<?php echo $p_reload;?></a>
                </li>
                <li class="list-group-item">
                  <b>좀비 킬 수</b> <a class="pull-right"><?php echo $p_zombiekills;?></a>
                </li>
                <li class="list-group-item">
                  <b>플레이 시간</b> <a class="pull-right"><?php echo $p_hours;?>시간 <?php echo $p_minute;?>분 <?php echo $p_second;?>초</a>
                </li>
                <li class="list-group-item">
                  <b>자원</b> <a class="pull-right"><?php echo $p_bullet;?>$</a>
                </li>
              </ul>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">캐릭터 상태(수치)</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>출혈</b> <a class="pull-right"><?php if ($p_bleeding==1) { echo "출혈";} else { echo "미출혈";} ?></a>
                </li>
                <li class="list-group-item">
                  <b>배고픔</b> <a class="pull-right"><?php if ($p_hunger<30) { echo "굶주림"; }
                 else if ($p_hunger<60) { echo "허기짐"; } else { echo "정상"; }?></a>
                </li>
                <li class="list-group-item">
                  <b>목마름</b> <a class="pull-right"><?php if ($p_thirst<30) { echo "탈수"; }
                 else if ($p_thirst<60) { echo "갈증"; } else { echo "정상"; }?></a>
                </li>

              </ul></div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
            <div class="box box-danger">
              <div class="box-header with-border">
                <i class="fa fa-bullhorn"></i>

                <h3 class="box-title">보유 총기</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <center>  <p> <!--보유 총기 -->
                  <?php for($count = -1; $count <=19; $count++){
                    if ($p_weapontype == $count) { echo $weapon_arrays_content[$count]; }
                  }?>

                  </p>
</center>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
          <div class="col-md-6">
              <div class="box box-danger">
                <div class="box-header with-border">
                  <i class="fa fa-warning"></i>

                  <h3 class="box-title">스킬&nbsp;<font size="2">(전선조작 및 조합기능)</font></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
<center><p><?php if($p_davemission1 >= 1) { echo "<img src='../dist/img/skill/skill1_master.png'>"; } else { echo "<img src='../dist/img/skill/skill1_no.png'>"; } ?>

   <?php if($p_davemission2 >= 1) { echo "<img src='../dist/img/skill/skill2_master.png'>"; } else { echo "<img src='../dist/img/skill/skill2_no.png'>"; } ?></p></center>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
        <!-- /.row -->
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

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
