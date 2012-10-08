<?php 
error_reporting(0);
session_start(); 
 
if (empty($_SESSION)){
$_SESSION['ip'] = md5($_SERVER['REMOTE_ADDR']);
echo "first time accessing with your ip"; 
echo "Session id: " . session_id();

echo "<br>";
echo "Server ip address:  ". $_SERVER['REMOTE_ADDR'];
echo "<br>";
echo "IP Session id ". $_SESSION['ip'];
 
}elseif($_SESSION['ip'] != md5($_SERVER['REMOTE_ADDR'])){
  session_destroy();
  session_start();
}else{
echo "we already have your ip <br><br>";
echo "Server ip address: ". $_SERVER['REMOTE_ADDR'];

echo "<br>";
echo "IP Session id  ". $_SESSION['ip'];
}

?>
