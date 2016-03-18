<?php


if (!isset($_SESSION)) {
  session_start();
}
$id=$_POST['reply_id'];
$msg=$_POST['reply_msg'];
$user=$_SESSION['MM_Username'];
$ip=$_SERVER['REMOTE_ADDR'];

$con = mysql_connect('localhost','root','');
mysql_select_db('chatbox',$con);
mysql_query("INSERT INTO `reply` (`id`, `username`, `msg`, `ip`) VALUES ('$id', '$user', '$msg','$ip');");

header('location:main.php');
?>