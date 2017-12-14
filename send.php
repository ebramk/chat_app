<?php

include ("account.php");
($dbh = mysql_connect($hostname,$username,$password));
mysql_select_db($database);

$user = $_GET["user"];
$pass = $_GET["pass"];
$N100 = $_GET["N100"];

$s = "SELECT * FROM chat WHERE name='$user' AND password = '$pass'";
$t = mysql_query($s);
$num = mysql_num_rows($t);

if ($num == 0) {
	die("Sorry the account information you provided is incorrect, please try again! ");
}

$s2 = "UPDATE chat SET chat_content = '$N100' WHERE name='$user'";
$t2 = mysql_query($s2);
echo("Sent!");
?>