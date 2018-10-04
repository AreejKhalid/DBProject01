<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'AreejKhalid');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
/*
$ID = $_POST['user'];
$Password = $_POST['pass'];
*/
function SignIn()
{
session_start();   //starting the session for user profile page
if(!empty($_POST['user']))   //checking the 'user' name which is from Sign-In.html, is it empty or have some text
{
	$query = mysql_query("SELECT *  FROM UserTable where UserName = '$_POST[user]' AND Password = '$_POST[pass]'") or die(mysql_error());
	$row = mysql_fetch_array($query) or die(mysql_error());
	if(!empty($row['UserName']) AND !empty($row['Password']))
	{
		$_SESSION['UserName'] = $row['Password'];
		echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";

	}
	else
	{
		echo "SORRY... YOU ENTERED WRONG ID AND PASSWORD... PLEASE RETRY...";
	}
}
}
if(isset($_POST['submit']))
{
	SignIn();
}

?>


