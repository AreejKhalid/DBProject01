<html>
<head>
<title> Delete Records </title>
</head>

<body>




<table border =1 cellpadding=1 cellspacing=1>

<tr>
	
	<th>ShopName</th>
	<th>CustName</th>
	<th>CustNo</th>
	<th>Address</th>
	<th>Area</th>
	<th>GC</th>
</tr>

<?php
$con = mysqli_connect('localhost','root');
if(!$con){
echo 'Not Connected to the Server';
}
if (!mysqli_select_db($con,'AreejKhalid'))
{
echo 'Database not Selected';
}
$sql="Select *from MyTable";

$records = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($records)){

echo "<tr>";
echo "<td>".$row['ShopName']."</td>";
echo "<td>".$row['CustName']."</td>";
echo "<td>".$row['CustNo']."</td>";
echo "<td>".$row['Address']."</td>";
echo "<td>".$row['Area']."</td>";
echo "<td>".$row['GC']."</td>";
echo "<td><a href=Fdelete.php?CustID=".$row['CustID'].">Delete</a></td>";


?>
</body>
</html>
