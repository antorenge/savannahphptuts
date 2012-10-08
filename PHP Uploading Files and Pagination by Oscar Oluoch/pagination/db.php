<?php 
//T connect to the database the following are used
    $db = @mysql_connect('Name_of_host', 'Username', 'Password_for_localhost') or die(mysql_error());
    @mysql_select_db('Name_of_database', $db) or die(mysql_error());
 
?>
