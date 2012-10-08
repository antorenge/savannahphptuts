<?php
$dbhost							= "127.0.0.1";
$dbuser							= "root";
$dbpass							= "4114";
$dbname							= "test";

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ("Error connecting to database");
mysql_select_db($dbname) or die ("Error selecting the database");
if(isset($_POST["submit"]))
{
$name = mysql_real_escape_string($_POST["user"]);
$query = "INSERT INTO users (name) VALUES ('$name')";
$exec = mysql_query($query);
if($exec)
{
  echo "<b>Record updated successfully!</b><br />";
}
else
{
  echo "<b>Error: ". mysql_error();
}
}
?>
<html>
<head>
   <title>Forms</title>
</head>
<body>
<form name="input" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
Username: <input type="text" name="user"><input type="submit" value="Add User" name="submit"></form>
</form>
<hr />
<b>USERS IN THE DATABASE</b>
<hr />
<ol>
<?php
$users = "SELECT * FROM users";
$mquery = mysql_query($users);
while($row = mysql_fetch_array($mquery))
{
  echo '<li>'.$row['name'].' </li>';
}
?>
</ol>
<!--
<script type="text/javascript">alert("Hacked"); </script>
-->
</body>
</html>
