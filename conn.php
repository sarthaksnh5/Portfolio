<?php
$db_name = "id8843238_test";
$mysql_username = "id8843238_test1";
$mysql_password = "test1";
$server_name = "localhost";

$conn = mysqli_connect($server_name, $mysql_username, $mysql_password, $db_name);

if($conn){
	echo "connection success";
}
else{
	echo "connection failed";
}
?>