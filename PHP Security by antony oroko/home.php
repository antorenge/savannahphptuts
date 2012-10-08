
<?php
	setcookie("session","session_id",time()+5);


 
  session_start(); 
  if(!$_SESSION['name']){
    header('location:login.php');
  }
?>

Hi <b><?php echo $_SESSION['name']; ?></b>,<br>

You've successfully logged in!

<a href="logout.php">Logout</a>
<br>
<?php 
echo "<br><br> Session id:";
//session id 
echo $_COOKIE['PHPSESSID'];
echo "<br><br> Cookie id:";
//cookie id 
echo print_r($_COOKIE);




?>