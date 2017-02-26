<?php
include("dbconfig.php");
include("connection.php");


$f_ip = $_SERVER['REMOTE_ADDR'];
$f_name=$_POST['f_name'];
$f_contents=$_POST['f_contents'];

$sql = "insert into feedback(f_ip, f_name, f_contents)
          values('$f_ip','$f_name','$f_contents') ";


 mysql_query($sql);
?>

<html>

<head>
    <meta charset="UTF-8">
  <script>

        alert("정상적으로 게시 되었습니다.");
        window.location.href = '../../main/feedback.php';
    </script>
    </head>
</html>
