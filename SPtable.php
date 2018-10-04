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
<head>
	<title>Sales Person</title>
	
</head>
<body>
	<h1>SALES PERSON INFORMATION</h1>
	  <table class="data-table">
		<thead>
			<tr>
				<th>SalesPersonID</th>
				<th>Name</th>
				<th>ContactNumber</th>
				<th>CustID</th>
				
			</tr>
		</thead>
		<tbody>
		<?php
		while ($row = mysqli_fetch_array($query))
		{
			
echo '<tr>
				<td>'.$row['SalesPersonID'].'</td>
				<td>'.$row['Name'].'</td>
				<td>'.$row['ContactNumber'].'</td>
				<td>'.$row['CustID'].'</td>
				
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
<div align="center"
<div id="outer">
<div align="center"
<div class = "inner"><form method="get" action="http://localhost/assignment1/SPtableinsert.php">
    <button type="submit">Insert</button>

</form></div>

<div class = "inner"><form method="get" action="http://localhost/assignment1/updateform.php">
    <button type="submit">Update</button>
</form></div>

<div class = "inner"><form method="get" action="http://localhost/assignment1/deleteform.php">
    <button type="submit">Delete</button>
</form></div>
</div>
</div>
</body>




</form>
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

outer
{
    width:100%;
    text-align: center;
}
.inner
{    display: inline-block;}
body {background-color: #e3edea;}


	</style>
</html>
