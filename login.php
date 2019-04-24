<?php
require "conn.php";

$user_name = $_POST["user_name"];
$user_pass = $_POST["password"];

$mysql_qry = "select * from user where username = '$user_name' && password = '$user_pass';";
$result = mysqli_query($conn, $mysql_qry);
if(mysqli_num_rows($result) > 0){
	echo "login";
}
else{
	echo "out";
}

?>