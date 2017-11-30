<?php
include('dist/include/connection.php');
include('dist/include/dbconfig.php');

session_start();


if($_SESSION[p_name]){
    ?>
    <script>
        alert("Вы вошли в систему. Вернуться к началу.");
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
  <title>WarZ | Войти</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css?reload=<?php time() ?>">
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
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <div class="login-box-body">

    <form action="dist/include/login.php" method="post">
      <div class="form-group has-feedback">
        <input type="text" name="p_name" class="form-control" placeholder="Логин" required autocomplete="off" style="ime-mode:inactive">
        <span class="glyphicon glyphicon-check form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="p_password" class="form-control" placeholder="Пароль" required autocomplete="off">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">

          <a href="register.php?status=myself"><button type="button" class="btn btn-default btn-block btn-flat">Регистрация</button></a>

        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="submit" class="btn btn-danger btn-block btn-flat">Войти</button></form>
        </div>
        <!-- /.col -->
      </div>


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

<script type="text/javascript" src="dist/js/jquery.backstretch.min.js"></script>
       <script>
           // jquery baackstretch (03.04.16)
           $.backstretch("dist/img/warzbg.png", {
               speed: 4000
           });
       </script>
</body>
</html>
