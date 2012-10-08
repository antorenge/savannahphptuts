<?php error_reporting(0);?>
<html>
<head></head>
<body>
	<form method="post" action="<?PHP $_SERVER['PHP_SELF']?>">
	Please Enter Image Url:<input type="text" name="imgurl"/>
	<input type="submit" name="submit" value="submit" />
	</form>
	
	<?php 
		
		$imgurl = $_POST['imgurl'];
		
		if($imgurl) {
		echo "Your pic is: <br>";
			echo "<img src=".$imgurl."><br>";	
			echo $imgurl;
		}
	?>
</body>	
</html>
