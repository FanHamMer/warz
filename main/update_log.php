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
        <title>WarZ | 업데이트 내역</title>
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
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <span class="sr-only">Toggle navigation</span> </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Notifications Menu -->
                            <li class="dropdown notifications-menu">
                                <!-- Menu toggle button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-bell-o"></i> <span class="label label-warning">1</span> </a>
                                <ul class="dropdown-menu">
                                    <li class="header">1개의 알림이 있습니다.</li>
                                    <li>
                                        <!-- Inner Menu: contains the notifications -->
                                        <ul class="menu">
                                            <li>
                                                <!-- start notification -->
                                                <a href="#"> <i class="fa fa-users text-aqua"></i> WarZ 인포웹이 개발 되었습니다. </a>
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
                                        <div class="pull-left"> <a href="#" class="btn btn-default btn-flat">내정보</a> </div>
                                        <div class="pull-right"> <a href="../dist/include/logout.php" class="btn btn-default btn-flat">로그아웃</a> </div>
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
                            <!-- Status --><a href="#"><i class="fa fa-circle text-success"></i> 온라인</a> </div>
                    </div>
                    <!-- Sidebar Menu -->
                    <ul class="sidebar-menu">
                        <li class="header">메뉴</li>
                        <!-- Optionally, you can add icons to the links -->
                        <li><a href="index.php"><i class="fa fa-book"></i> <span>내정보</span></a></li>
                        <li><a href="backpack.php"><i class="fa fa-archive"></i> <span>가방</span></a></li>
                        <li><a href="rank.php"><i class="fa fa-heart"></i> <span>랭킹</span></a></li>
                        <li class="active"><a href="update_log.php"><i class="fa fa-edit"></i> <span>업데이트 내역</span></a></li>
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
                    <h1>업데이트 내역</h1> </section>
                <div class="pad margin no-print">
                    <div class="callout callout-info" style="margin-bottom: 0!important;">
                        <h4><i class="fa  fa-bullhorn"></i> 개발자의 한마디:</h4> 서버 업데이트 내역이 올라오는 곳 입니다. &nbsp;&nbsp;&nbsp;&nbsp;- by. WarZ Developer Team </div>
                </div>
                <!-- Main content -->
                <section class="content">
                    <ul class="timeline">
                        <li class="time-label"> <span class="bg-red">
            04.09.2017
        </span> </li>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        <li>
                            <!-- timeline icon --><i class="fa fa-envelope bg-blue"></i>
                            <div class="timeline-item"> <span class="time"><i class="fa fa-clock-o"></i> </span>
                                <h3 class="timeline-header"><a href="#">helios</a></h3>
                                <div class="timeline-body"> 카페 디자인과 인포웹 초기화면이 리뉴얼 되었습니다.
                                    <br /> </div>
                            </div>
                        </li>
                        <ul class="timeline">
                            <li class="time-label"> <span class="bg-red">
            04.09.2017
        </span> </li>
                            <!-- /.timeline-label -->
                            <!-- timeline item -->
                            <li>
                                <!-- timeline icon --><i class="fa fa-envelope bg-blue"></i>
                                <div class="timeline-item"> <span class="time"><i class="fa fa-clock-o"></i> </span>
                                    <h3 class="timeline-header"><a href="#">Prince_Jess</a></h3>
                                    <div class="timeline-body"> 메일 인증 기능이 삭제되었고 이제는 컴퓨터 1대당 계정 1개로 생성제한 됩니다.
                                        <br /> </div>
                                </div>
                            </li>
                            <ul class="timeline">
                                <li class="time-label"> <span class="bg-red">
            04.09.2017
        </span> </li>
                                <!-- /.timeline-label -->
                                <!-- timeline item -->
                                <li>
                                    <!-- timeline icon --><i class="fa fa-envelope bg-blue"></i>
                                    <div class="timeline-item"> <span class="time"><i class="fa fa-clock-o"></i> </span>
                                        <h3 class="timeline-header"><a href="#">helios</a></h3>
                                        <div class="timeline-body"> 서버현황 구현을 마쳤습니다. [서버인원수 / 버전 / 닉네임 / 핑]
                                            <br /> </div>
                                    </div>
                                </li>
                                <ul class="timeline">
                                    <li class="time-label"> <span class="bg-red">
                04.09.2017
            </span> </li>
                                    <!-- /.timeline-label -->
                                    <!-- timeline item -->
                                    <li>
                                        <!-- timeline icon --><i class="fa fa-envelope bg-blue"></i>
                                        <div class="timeline-item"> <span class="time"><i class="fa fa-clock-o"></i> </span>
                                            <h3 class="timeline-header"><a href="#">helios</a></h3>
                                            <div class="timeline-body"> 각 메뉴에 대한 안내사항을 추가 했습니다.
                                                <br /> </div>
                                        </div>
                                    </li>
                                    <ul class="timeline">
                                        <li class="time-label"> <span class="bg-red">
                04.09.2017
            </span> </li>
                                        <!-- /.timeline-label -->
                                        <!-- timeline item -->
                                        <li>
                                            <!-- timeline icon --><i class="fa fa-envelope bg-blue"></i>
                                            <div class="timeline-item"> <span class="time"><i class="fa fa-clock-o"></i> </span>
                                                <h3 class="timeline-header"><a href="#">helios</a></h3>
                                                <div class="timeline-body"> 랭킹 시스템을 구현 했습니다.
                                                    <br /> </div>
                                            </div>
                                        </li>
                                        <ul class="timeline">
                                            <li class="time-label"> <span class="bg-red">
                03.26.2017
            </span> </li>
                                            <!-- /.timeline-label -->
                                            <!-- timeline item -->
                                            <li>
                                                <!-- timeline icon --><i class="fa fa-envelope bg-blue"></i>
                                                <div class="timeline-item"> <span class="time"><i class="fa fa-clock-o"></i> </span>
                                                    <h3 class="timeline-header"><a href="#">Prince_Jess</a></h3>
                                                    <div class="timeline-body"> 피난소 내부 NPC들에 퀘스트 시 말투와 성격을 수정하였습니다.
                                                        <br> 피난소 진입 시 뜨던 워닝을 수정하였습니다.
                                                        <br> 기존 NOISE UI를 제거하고 커스텀 UI를 이용해 UI를 개편하였습니다.
                                                        <br> 좀비 움직임을 조금 더 부드럽게 개편하였습니다.
                                                        <br> 약탈자 NPC가 생성되었으며 이 약탈자 NPC는 당신을 확인하는 즉시 당신의 물건을 빼앗기 위해 달려들것입니다.
                                                        <br /> </div>
                                                </div>
                                            </li>
                                            <ul class="timeline">
                                                <li class="time-label"> <span class="bg-red">
                02.18.2017
            </span> </li>
                                                <!-- /.timeline-label -->
                                                <!-- timeline item -->
                                                <li>
                                                    <!-- timeline icon --><i class="fa fa-envelope bg-blue"></i>
                                                    <div class="timeline-item"> <span class="time"><i class="fa fa-clock-o"></i> </span>
                                                        <h3 class="timeline-header"><a href="#">helios</a></h3>
                                                        <div class="timeline-body"> 가방(인벤토리) 시스템을 추가 했습니다.
                                                            <br>본인이 소지한 아이템만 표시 됩니다.
                                                            <br /> </div>
                                                    </div>
                                                </li>
                                                <ul class="timeline">
                                                    <li class="time-label"> <span class="bg-red">
                01.11.2017
            </span> </li>
                                                    <!-- /.timeline-label -->
                                                    <!-- timeline item -->
                                                    <li>
                                                        <!-- timeline icon --><i class="fa fa-envelope bg-blue"></i>
                                                        <div class="timeline-item"> <span class="time"><i class="fa fa-clock-o"></i> </span>
                                                            <h3 class="timeline-header"><a href="#">helios</a></h3>
                                                            <div class="timeline-body"> 인포웹 개발이 진행 되었습니다. </div>
                                                        </div>
                                                    </li>
                                                    <li class="time-label"> <span class="bg-red">
              12.24.2016
            </span> </li>
                                                    <!-- /.timeline-label -->
                                                    <!-- timeline item -->
                                                    <li>
                                                        <!-- timeline icon --><i class="fa fa-envelope bg-blue"></i>
                                                        <div class="timeline-item"> <span class="time"><i class="fa fa-clock-o"></i> </span>
                                                            <h3 class="timeline-header"><a href="#">WarZ Developer Team</a></h3>
                                                            <div class="timeline-body"> 오픈 베타 테스트 </div>
                                                        </div>
                                                    </li>
                                                    <li class="time-label"> <span class="bg-red">
                09.2016
            </span> </li>
                                                    <!-- /.timeline-label -->
                                                    <!-- timeline item -->
                                                    <li>
                                                        <!-- timeline icon --><i class="fa fa-envelope bg-blue"></i>
                                                        <div class="timeline-item"> <span class="time"><i class="fa fa-clock-o"></i> </span>
                                                            <h3 class="timeline-header"><a href="#">WarZ Developer Team</a></h3>
                                                            <div class="timeline-body"> 1차 CBT 테스트 진행 </div>
                                                        </div>
                                                    </li>
                                                    <li class="time-label"> <span class="bg-red">
                08.2016
            </span> </li>
                                                    <!-- /.timeline-label -->
                                                    <!-- timeline item -->
                                                    <li>
                                                        <!-- timeline icon --><i class="fa fa-envelope bg-blue"></i>
                                                        <div class="timeline-item"> <span class="time"><i class="fa fa-clock-o"></i> </span>
                                                            <h3 class="timeline-header"><a href="#">WarZ Developer Team</a></h3>
                                                            <div class="timeline-body"> 새 시즌 모드 개발착수 </div>
                                                        </div>
                                                    </li>
                                                    <li class="time-label"> <span class="bg-red">
               09.2015
            </span> </li>
                                                    <!-- /.timeline-label -->
                                                    <!-- timeline item -->
                                                    <li>
                                                        <!-- timeline icon --><i class="fa fa-envelope bg-blue"></i>
                                                        <div class="timeline-item"> <span class="time"><i class="fa fa-clock-o"></i> </span>
                                                            <h3 class="timeline-header"><a href="#">WarZ Developer Team</a></h3>
                                                            <div class="timeline-body"> 서비스 종료 </div>
                                                        </div>
                                                    </li>
                                                    <li class="time-label"> <span class="bg-red">
                08.2016
            </span> </li>
                                                    <!-- /.timeline-label -->
                                                    <!-- timeline item -->
                                                    <li>
                                                        <!-- timeline icon --><i class="fa fa-envelope bg-blue"></i>
                                                        <div class="timeline-item"> <span class="time"><i class="fa fa-clock-o"></i> </span>
                                                            <h3 class="timeline-header"><a href="#">WarZ Developer Team</a></h3>
                                                            <div class="timeline-body"> 오픈 베타 서비스 진행 </div>
                                                        </div>
                                                    </li>
                                                    <li class="time-label"> <span class="bg-red">
                07.2015
            </span> </li>
                                                    <!-- /.timeline-label -->
                                                    <!-- timeline item -->
                                                    <li>
                                                        <!-- timeline icon --><i class="fa fa-envelope bg-blue"></i>
                                                        <div class="timeline-item"> <span class="time"><i class="fa fa-clock-o"></i> </span>
                                                            <h3 class="timeline-header"><a href="#">WarZ Developer Team</a></h3>
                                                            <div class="timeline-body"> 재 개발 착수 </div>
                                                        </div>
                                                    </li>
                                                    <li class="time-label"> <span class="bg-red">
                03.2015
            </span> </li>
                                                    <!-- /.timeline-label -->
                                                    <!-- timeline item -->
                                                    <li>
                                                        <!-- timeline icon --><i class="fa fa-envelope bg-blue"></i>
                                                        <div class="timeline-item"> <span class="time"><i class="fa fa-clock-o"></i> </span>
                                                            <h3 class="timeline-header"><a href="#">WarZ Developer Team</a></h3>
                                                            <div class="timeline-body"> 개발 중단 </div>
                                                        </div>
                                                    </li>
                                                    <li class="time-label"> <span class="bg-red">
                02.2015
            </span> </li>
                                                    <!-- /.timeline-label -->
                                                    <!-- timeline item -->
                                                    <li>
                                                        <!-- timeline icon --><i class="fa fa-envelope bg-blue"></i>
                                                        <div class="timeline-item"> <span class="time"><i class="fa fa-clock-o"></i> </span>
                                                            <h3 class="timeline-header"><a href="#">WarZ Developer Team</a></h3>
                                                            <div class="timeline-body"> 베타테스트 및 서비스 정식 오픈 </div>
                                                        </div>
                                                    </li>
                                                    <!-- timeline time label -->
                                                    <li class="time-label"> <span class="bg-red">
                  01.2015
              </span> </li>
                                                    <!-- /.timeline-label -->
                                                    <!-- timeline item -->
                                                    <li>
                                                        <!-- timeline icon --><i class="fa fa-envelope bg-blue"></i>
                                                        <div class="timeline-item"> <span class="time"><i class="fa fa-clock-o"></i> </span>
                                                            <h3 class="timeline-header"><a href="#">WarZ Developer Team</a></h3>
                                                            <div class="timeline-body"> 서버 개발 착수 </div>
                                                        </div>
                                                    </li>
                                                    <!-- END timeline item -->시작 </ul>
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
                <!-- Default to the left --><strong>Copyright &copy; 2016 <a href="cafe.daum.net/WarZ">WarZ</a>&nbsp; (developer helios).</strong> All rights reserved. </footer>
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