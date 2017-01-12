<?php
include('connection.php');
include('dbconfig.php');

session_cache_expire(2);
session_start();

$name_check=$_SESSION['p_name'];



$ses_sql = mysqli_query($db,"SELECT * FROM players WHERE p_name='$name_check' ");

$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$p_name=$row['p_name']; // 이름
$p_health=$row['p_health']; // 체력
$p_ammo=$row['p_ammo']; // 총알
$p_reload=$row['p_reload']; // 탄창
$p_weapontype=$row['p_weapontype']; // 무기 종류
$p_skin=$row['p_skin']; // 스킨번호
$p_race=$row['p_race']; // 인종
$p_gender=$row['p_gender']; // 성별
$p_bleeding=$row['p_bleeding']; // 출혈
$p_hunger=$row['p_hunger']; // 배고픔
$p_thirst=$row['p_thirst']; // 목마름
$p_zombiekills=$row['p_zombiekills']; // 좀비 킬
$p_tutorial=$row['p_tutorial']; // 튜토리얼 여부

$p_hours=$row['p_hours']; // 시
$p_minute=$row['p_minute']; // 분
$p_second=$row['p_second']; // 초

// skill
$p_davemission1=$row['p_davemission1']; // 전선
$p_davemission2=$row['p_davemission2']; // 조합



if(!isset($name_check))
{
header("Location: ../../");
}
?>
