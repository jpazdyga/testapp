<?php

$username="dbuser";
$password="dbpass";
$database="testapp_db";

mysql_connect(dbhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

$query="SELECT * FROM contacts";
$result=mysql_query($query);

$num=mysql_numrows($result);

mysql_close();

echo "<b><center>Database Output</center></b><br><br>";

$i=0;
while ($i < $num) {
$first=mysql_result($result,$i,"first");
echo "<b>$first</b><br />";
$i++;
}

?>
