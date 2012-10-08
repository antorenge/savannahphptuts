<?php error_reporting(0);?>
<html>
	<head> 
	<title>Our First XSS tuorial by Antony Oroko</title>
			
			<style type="text/css">
				p.myname {font: normal 14px Arial; color: red;}
			</style>
			
	</head>
	<body>
		
		<form name="form" method="post" action="index.php">
		<p class="myname">Name: <input type="text" name="name" /></p>
		<input type="submit" name="submit" value="submit" />
		</form>
		
		My name is: <?php
		$name = $_POST['name'];		
		echo htmlspecialchars($name); 
		?>
		
	</body>
</html>



