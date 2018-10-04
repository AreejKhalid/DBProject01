<?php
$db_host = 'localhost';
$db_user = 'root'; 
$db_pass = '';
$db_name = 'AreejKhalid';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: '.mysqli_connect_error());	
}

$sql = 'SELECT * FROM ProductTable';
		
$query = mysqli_query($conn,$sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
<head>
	<title>AREEJ KHALID</title>
	
</head>
<body>
	

 	
<style type="text/css">

		h1 {
			margin: 25px 25px;
			text-align: center;
			text-transform: uppercase;
			font-size: 30px;
		}


<br/>

	</style>


<form action =Ptdelete.php method=post>
<div class = "block">
<label>ProductCode</label> : <input type=text name="ProductCode">
<br/>
<br/></div>
<td><input type=submit name=Delete value='Delete'></div>

