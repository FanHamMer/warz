<?php
include('dist/include/connection.php');
include('dist/include/dbconfig.php');

session_start();


if($_SESSION[p_name]){
    ?>
    <script>
        alert("로그인 하신 상태입니다. 메인으로 돌아갑니다.");
        location.href = "main/";
    </script>
    <?php
}

?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>WarZ | 회원가입</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->


</head>
<body style="overflow:hidden" class="hold-transition login-page">
<div class="login-box">
  <!--<div class="login-logo">
    <a href="#"><font color="white"><b>WarZ</a></font>
  </div> -->
  <!-- /.login-logo -->
    <br><br><br><br><br><br>
  <div class="login-box-body">

<?php if ($_GET['status'] == "myself"){ ?>
    <form action="register.php?status=gun" method="post">
      <div class="form-group has-feedback">

        <input type="text" name="p_name" class="form-control" placeholder="닉네임" required autocomplete="off"  style="ime-mode:inactive" onkeyup="this.value=this.value.replace(/[^a-zA-Z_]/g,'');">
        <span class="glyphicon glyphicon-check form-control-feedback"></span>
        <p>예시) Gildong_Hong</p>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="p_password1" class="form-control" placeholder="비밀번호" required autocomplete="off">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="p_password2" class="form-control" placeholder="비밀번호 다시 입력" required autocomplete="off">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">

        <button type="submit" name="submit" class="btn btn-default btn-block btn-flat">다음</button>

        </div>
        <!-- /.col -->
        <div class="col-xs-4">
            <a href="index.php"><button type="button" class="btn btn-danger btn-block btn-flat">로그인</button></a>
        </div>
        <!-- /.col -->
      </div></div>  </div></div>
<?php } else if ($_GET['status'] == "character") { ?>
<?php if (!$_POST['p_name']){ header("location:register.php?status=myself");  }  ?>

<p>캐릭터패널</p>


<?php } else if ($_GET['status'] == "gun"){?>
<?php if (!$_POST['p_name']){ header("location:register.php?status=myself");  }  ?>

  <?php
  if($_POST['p_password1'] == $_POST['p_password2']){
$_POST['p_password'] = $_POST['p_password1'];

  } else { ?>
    <script>
    alert("비밀번호가 같지 않습니다.");
     window.location.href = 'register.php?status=myself';

     </script>
  <?php }


  $query1 = "SELECT * FROM players WHERE p_name='{$_POST['p_name']}'";
            $result1 = mysql_query($query1);
            $count1 = mysql_num_rows($result1);

            if($count1){ ?>
              <script>
              alert("닉네임 중복");
               window.location.href = 'register.php?status=myself';

               </script>
  <?php } ?>
<script>
alert("한번 선택한 총기는 변경이 어렵습니다. 신중히 골라주시기 바랍니다.\n총알은 지급 되지 않습니다. 참고 해주시기 바랍니다!");
</script>
<form action="register.php?status=food" method="post">
  <input type="hidden" name="p_name" value="<?php echo $_POST['p_name'] ?>">
  <input type="hidden" name="p_password" value="<?php echo $_POST['p_password'] ?>">


                             <div class="box box-danger">
                                 <div class="box-header with-border"> <i class="fa fa-bullhorn"></i>
                                     <h3 class="box-title"><?php echo $_POST['p_name']?>님 총기를 선택 해주세요.</h3> </div>
                                 <!-- /.box-header -->

                                 <div class="box-body">
                                   <div class="form-group">
                                     <label>
                                       <input type="radio" name="p_weapontype" value="1" class="flat-red" required>
                                       &nbsp;Remington 870
                                     </label><br>
                                     <label>
                                       <input type="radio" name="p_weapontype" value="7" class="flat-red" required>
                                       &nbsp;Mosin-Nagant
                                     </label><br>
                                     <label>
                                       <input type="radio" name="p_weapontype" value="13" class="flat-red" required>
                                       &nbsp;kar98k
                                     </label>
                                     <p style="font-size:2px;"><font color="red">한번 선택한 총기는 변경이 어렵습니다. 신중히 골라주시기 바랍니다.<br>총알은 지급 되지 않습니다. 참고 해주시기 바랍니다!</p>
             </div>

             <div class="row">

               <div class="col-xs-8">

               <button type="submit" name="submit" class="btn btn-default btn-block btn-flat">다음</button>
             </form>
               </div>
               <!-- /.col -->
               <div class="col-xs-4">
                  <button type="button" class="btn btn-danger btn-block btn-flat" onclick="alert('인포웹 및 회원가입, 각종 오류\n개발자 네이트온 : laravel@nate.com')">문의</button>
               </div>
</div></div>

<?php } else if ($_GET['status'] == "food"){?>
<?php if (!$_POST['p_name']){ header("location:register.php?status=myself");  }  ?>

  <script>
  alert("한번 선택한 음식은 변경이 어렵습니다. 신중히 골라주시기 바랍니다.\n선택하신것에 한하여 2개가 지급됩니다.");
  </script>
  <form action="dist/include/register.php" method="post">
    <input type="hidden" name="p_name" value="<?php echo $_POST['p_name'] ?>">
    <input type="hidden" name="p_password" value="<?php echo $_POST['p_password'] ?>">
    <input type="hidden" name="p_weapontype" value="<?php echo $_POST['p_weapontype'] ?>">
                               <div class="box box-danger">
                                   <div class="box-header with-border"> <i class="fa fa-bullhorn"></i>
                                       <h3 class="box-title">음식을 선택 해주세요.</h3> </div>
                                   <!-- /.box-header -->

                                   <div class="box-body">
                                     <div class="form-group">
                                       <label>
                                         <input type="radio" name="p_food" value="item_0" class="flat-red" required>
                                         &nbsp;사과주스
                                       </label><br>
                                       <label>
                                         <input type="radio" name="p_food" value="item_1" class="flat-red" required>
                                         &nbsp;오렌지주스
                                       </label><br>
                                       <label>
                                         <input type="radio" name="p_food" value="item_15" class="flat-red" required>
                                         &nbsp;통조림
                                       </label><br>
                                       <label>
                                         <input type="radio" name="p_food" value="item_16" class="flat-red" required>
                                         &nbsp;빵
                                       </label><br>
                                       <label>
                                         <input type="radio" name="p_food" value="item_17" class="flat-red" required>
                                         &nbsp;물
                                       </label>

                                       <p style="font-size:2px;"><font color="red">한번 선택한 음식은 변경이 어렵습니다. 신중히 골라주시기 바랍니다.<br>선택하신것에 한하여 2개가 지급됩니다.</p>
               </div>

               <div class="row">

                 <div class="col-xs-8">

                 <button type="submit" name="submit" class="btn btn-default btn-block btn-flat">다음</button>
               </form>
                 </div>
                 <!-- /.col -->
                 <div class="col-xs-4">
                     <button type="button" class="btn btn-danger btn-block btn-flat">뒤로</button>

                 </div>
  </div></div>


  <?php } else {   header("location:register.php?status=myself");   }?>
    </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>

<!--<script type="text/javascript" src="dist/js/jquery.backstretch.min.js"></script>
       <script>
           // jquery baackstretch (03.04.16)
           $.backstretch("dist/img/warzbg.png", {
               speed: 4000
           });
       </script>
       <script type="text/javascript">
var message="Sorry, right-click has been disabled";
///////////////////////////////////
function clickIE() {
  if (document.all) {(message);return false;
}}
function clickNS(e) {
  if
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {(message);return false;
}}}
if (document.layers) {
  document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;
}
else {
  document.onmouseup=clickNS;document.oncontextmenu=clickIE;
}
document.oncontextmenu=new Function("return false")
</script>
<script language="JavaScript">
    document.onkeypress = function (event) {
  event = (event || window.event);
        if (event.keyCode == 123) {
           //alert('No F-12');
            return false;
}
    }
document.onmousedown = function (event) {
  event = (event || window.event);
        if (event.keyCode == 123) {
            return false;
}
    }
document.onkeydown = function (event) {
  event = (event || window.event);
        if (event.keyCode == 123) {
            return false;
}
    }
</script>-->


<script type="text/javascript" src="dist/js/jquery.backstretch.min.js"></script>
       <script>
           // jquery baackstretch (03.04.16)
           $.backstretch("dist/img/warzbg.jpg", {
               speed: 4000
           });
       </script>
</body>
</html>
