<?php

header('Refresh: 5; URL=http://sample.pazdyga.pl/index.php');

echo "<link href='./styles/style.css' rel='stylesheet' type='text/css' />";
echo "<link href='./styles/table.css' rel='stylesheet' type='text/css' />";

echo "<body>";

$username="dbuser";
$password="dbpass";
$database="testapp_db";

mysql_connect(dbhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

$query="SELECT * FROM testapp_users";
$result=mysql_query($query);

$num=mysql_numrows($result);

mysql_close();

echo "
<div id='CSSTable' class='CSSTable' style='width:600px;height:170px;'>
<table>";
echo "<tr><td><center>You will be automatically redirected to main page after 5 seconds.</center></tr></td>";
echo "<tr><td><b><center>Database Output</center></b></td></tr>";

$num=mysql_numrows($result);
$i=0;while ($i < $num) {
	$userid=mysql_result($result,$i,"user_id");
	$username=mysql_result($result,$i,"user_name");
	$i++;
	echo "<tr><td><center>User <b>$username</b> has an ID: <b>$userid</b></center></tr></td>";
}

echo "</table></body>";
?>
