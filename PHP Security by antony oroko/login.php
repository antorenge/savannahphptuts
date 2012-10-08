<?php error_reporting(0); ?>
<form method="post" action="login.php">
  <table>
    <tr>
      <td>Username:</td>
      <td><input type="text" name="uname"></td>     
    </tr>
    <tr>
      <td>Password:</td>
      <td><input type="password" name="password"></td>     
    </tr> 
  </table>
  
  <input type="submit" name="submit" value="Submit">
  
</form>

		<?php
			
			$uname = $_POST['uname'];
			$password = $_POST['password'];
			
			if($uname and $password){
				
			mysql_connect("localhost","root","antoroko");
			mysql_select_db("phpsecurity");
			
			//querying the database for users login details  
			$q = mysql_query("SELECT * FROM users WHERE uname='".$uname."' and password=md5('".$password."')");
		
			//determing if the database has any registered users 
			$n = mysql_num_rows($q);
			
			if ($n>0){
					  $r = mysql_fetch_array($q);
					   session_start();   
					   $_SESSION['name'] = $r['uname'];
					   
					   header('location:home.php');
					   
					}else{
					  echo "Login Failed!";
					
					}
			
			}
			
		?>
