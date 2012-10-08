<?php 
session_start();

		if (!isset($_SESSION['count'])) {
			$_SESSION['count'] = 0;
		} else {
			$_SESSION['count']++;
		}
echo "Your session count is: ".$_SESSION['count'];
echo "<br>";
echo "Your session id: ".session_id(); 



?>



