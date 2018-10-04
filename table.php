<?php
$db_host = 'localhost';
$db_user = 'root'; 
$db_pass = '';
$db_name = 'AreejKhalid';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: '.mysqli_connect_error());	
}

$sql = 'SELECT * FROM MyTable';
		
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
	<h1>CUSTOMERS</h1>
	<table class="data-table">
		<thead>
			<tr>
				<th>CustID</th>
				<th>ShopName</th>
				<th>CustName</th>
				<th>CustNo</th>
				<th>Address</th>
				<th>Area</th>
				<th>GC</th>
			</tr>
		</thead>
		<tbody>
		<?php
		while ($row = mysqli_fetch_array($query))
		{
			
echo '<tr>
				<td>'.$row['CustID'].'</td>
				<td>'.$row['ShopName'].'</td>
				<td>'.$row['CustName'].'</td>
				<td>'.$row['CustNo'].'</td>
				<td>'.$row['Address'].'</td>
				<td>'.$row['Area'].'</td>
				<td>'.$row['GC'].'</td>
			</tr>';
		}?>
		</tbody>
		
	</table>


 	
<style type="text/css">

		h1 {
			margin: 25px 25px;
			text-align: center;
			text-transform: uppercase;
			font-size: 30px;
		}


<br/>

	</style>
</html>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<style>

label{
display: inline-block;
width: 140px;
text-align:right;
}
</style>
<div id="outer">
<div class = "inner"><form method="get" action="http://localhost/assignment1/insertform.php">
    <button type="submit">Insert</button>
</form></div>

<div class = "inner"><form method="get" action="http://localhost/assignment1/updateform.php">
    <button type="submit">Update</button>
</form></div>

<div class = "inner"><form method="get" action="http://localhost/assignment1/Cdeleteform.php">
    <button type="submit">Delete</button>
</form></div>
</div>
</body>

<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
			background-color: Lavender;



		}
table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

h1 {
			margin: 25px 25px;
			text-align: center;
			text-transform: uppercase;
			font-size: 30px;
		}

table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		
		/* Table Header */
		.data-table thead th {
			background-color: #8E80D4;
			color: #FFFFFF;
			border-color: #C9C4E5 !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ADA5D5;
			border-color: #ADA5D5;
		}

#outer
{
    width:100%;
    text-align: center;
}
.inner
{    display: inline-block;}
body {background-color: #e3edea;}



	</style>
</html>
