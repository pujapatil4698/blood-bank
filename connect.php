<?php
$mysql_host='localhost';
$mysql_username='root';
$mysql_password='';
$error_message='could not connect';
$mysql_database='b_database';
mysqli_connect($mysql_host, $mysql_username, $mysql_password, $mysql_database);
if(!mysqli_connect($mysql_host, $mysql_username, $mysql_password, $mysql_database))
{
	echo $error_message;
}
?>


