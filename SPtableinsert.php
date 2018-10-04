<?php
$db_host = 'localhost';
$db_user = 'root'; 
$db_pass = '';
$db_name = 'AreejKhalid';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: '.mysqli_connect_error());	
}

if(!$conn)
{

echo 'Not Connected to the Server';

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

<form method="post" action="SPinsert.php">

<div class = "block">
	<label>SalesPersonID</label> : <input type ="text" name = "SalesPersonID">
	<br/></dv>
	
	<div class = "block">
	<label>Name</label> : <input type ="text" name = "Name">
	<br/></div>
	
	<div class = "block">
	<label>ContactNumber</label> : <input type ="text" name = "ContactNumber">
	<br/></div>

	<div class = "block">
	<label>CustID</label> : <input type ="text" name = "CustID">
	<br/>


	<br/></div>
	<input type="submit" value ="Insert">






</form>
</html>


















