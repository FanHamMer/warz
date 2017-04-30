<?php
include("dbconfig.php");
include("connection.php");

$p_name=$_POST['p_name'];
$p_password=$_POST['p_password'];
$p_weapontype=$_POST['p_weapontype'];
$p_food=$_POST['p_food'];
$p_name = preg_replace("/[%\#\&\+\-%@=\/\:;,\.'\"\^`~\|\*$#<>()\[\]\{\}]/i", "", $p_name);


$sql = "insert into players(p_name, p_password, p_weapontype, p_food)
                         values('$p_name','$p_password','$p_weapontype','$p_food') ";
mysql_query($sql);


echo $sql;
?>
