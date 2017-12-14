<?php

include ("account.php");
($dbh = mysql_connect($hostname,$username,$password));
mysql_select_db($database);

$user2 = $_GET["user2"];

$s = "SELECT chat_content FROM chat WHERE name='$user2'";
$t = mysql_query($s);
$num = mysql_num_rows($t);

if ($num == 0) {
	die("Sorry the account information you provided is incorrect, please try again!");
}

$r = mysql_fetch_array($t);
$content = $r["chat_content"];

echo("$content");

?>