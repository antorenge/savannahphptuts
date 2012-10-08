<?php

mysql_connect('localhost','root','antoroko');
mysql_select_db('phpsecurity');
 
		function s_insert($id,$data){
		  mysql_query("INSERT INTO session (id,data) 
		  VALUES ('".mysql_real_escape_string($id)."',
		        '".mysql_real_escape_string($data)."') ");
		}
 
		function s_select($id){
		  $q = mysql_query("SELECT *, (time_to_sec(now()) - time_to_sec(3))/60 as selisih FROM session WHERE id='".mysql_real_escape_string($id)."'") or die(mysql_error());
		  $r = mysql_fetch_array($q);
		  return $r;
		}
 
		function s_delete($id){
		  $q = mysql_query("DELETE FROM session WHERE id='".mysql_real_escape_string($id)."'") or die(mysql_error());
		  return true;
		}

?>
