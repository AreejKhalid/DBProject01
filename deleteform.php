<?php
$db_host = 'localhost';
$db_user = 'root'; 
$db_pass = '';
$db_name = 'AreejKhalid';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: '.mysqli_connect_error());	
}

$sql = 'SELECT * FROM SalesPersonTable';
		
$query = mysqli_query($conn,$sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>

<html>
<style>

body {background-color: #e3edea;
    color : black;
}

form {
font-family:Comic Sans Ms; text-align: center;

}
label {
  display: inline-block;
  width: 140px;
  text-align: right;
}

</style>


<form action =SPdelete.php method=post>
<div class = "block">
<label>SalesPersonID</label> : <input type=text name="SalesPersonID">
<br/>
<br/></div>

<td><input type=submit name=Delete value='Delete'>

