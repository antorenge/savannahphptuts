<?php error_reporting(0);?>
<html>
<head></head>
<body>
	<form method="post" action="<?PHP $_SERVER['PHP_SELF']?>">
	<input type="text" name="filter"/>
	<input type="submit" name="submit" value="submit" />
	</form>
	
	<?php 
		
		$wfilter = $_POST['filter'];
		
		echo WordsFilter(eregi_replace("(&#)+[0-9]{1,}.(;)", "*", $wfilter));
		
		function WordsFilter($wfilter) {
			$ban = array("sex", "porn", "fuck");
			$grant = array("s**", "p**", "f**");
			$wfilter = str_replace($ban, $grant, $wfilter);
			
			return $wfilter;
		}
		
	?>
</body>	
</html>
