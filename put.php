<?php

if (!isset($_SESSION)) {
  session_start();
}
$user=$_POST['uname'];
$msg=$_POST['msg'];
$ip=$_SERVER['REMOTE_ADDR'];


$con = mysql_connect('localhost','root','');
mysql_select_db('chatbox',$con);
mysql_query("INSERT INTO `logs` (`username`, `msg`, `ip`) VALUES ('$user', '$msg', '$ip');");

header('location:main.php');
?>