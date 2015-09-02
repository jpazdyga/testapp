<?php

$username="dbuser";
$password="dbpass";
$database="testapp_db";

mysql_connect(dbhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

$query="SELECT * FROM contacts";
$result=mysql_query($query);

?>
