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
$p_bullet=$row['p_bullet']; // 리소스 자원


$p_hours=$row['p_hours']; // 시
$p_minute=$row['p_minute']; // 분
$p_second=$row['p_second']; // 초

// skill
$p_davemission1=$row['p_davemission1']; // 전선
$p_davemission2=$row['p_davemission2']; // 조합

/* 아이템 0~19 */
$item_0=$row['item_0'];
$item_1=$row['item_1'];
$item_2=$row['item_2'];
$item_3=$row['item_3'];
$item_4=$row['item_4'];
$item_5=$row['item_5'];
$item_6=$row['item_6'];
$item_7=$row['item_7'];
$item_8=$row['item_8'];
$item_9=$row['item_9'];
$item_10=$row['item_10'];
$item_11=$row['item_11'];
$item_12=$row['item_12'];
$item_13=$row['item_13'];
$item_14=$row['item_14'];
$item_15=$row['item_15'];
$item_16=$row['item_16'];
$item_17=$row['item_17'];
$item_18=$row['item_18'];
$item_19=$row['item_19'];
$backpack_status=$row['backpack_status'];

if(!isset($name_check))
{
header("Location: ../../");
}
?>
