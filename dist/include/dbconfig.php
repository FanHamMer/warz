<?php
  $connect = mysql_connect('localhost','root','') or die ('db error');
  mysql_set_charset("utf8");
  mysql_select_db('warzdb',$connect) or die('db error2');
  mysql_query('set names utf8');
  ?>
