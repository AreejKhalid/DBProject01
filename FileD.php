<html>
<head>
<title> Update Your Data </title>
</head>
<body>
<?php

$con = mysqli_connect('localhost','root');
if(!$con){
echo 'Not Connected to the Server';
}
if (!mysqli_select_db($con,'AreejKhalid'))
{
echo 'Database not Selected';
}

$sql=" Select * from MyTable";

$records = mysqli_query($con,$sql);


?>

<table>
<tr>
	
	<th>ShopName</th>
	<th>CustName</th>
	<th>CustNo</th>
	<th>Address</th>
	<th>Area</th>
	<th>GC</th>
</tr>

<?php
while($row = mysqli_fetch_array($records)){
echo "<tr><form action =FileC.php method=post>";
echo "<input type=hidden name=CustID value='".$row['CustID']."' >";
echo "<td><input type=text name=ShopName value='".$row['ShopName']."' ></td>";
echo "<td><input type=text name=CustName value='".$row['CustName']."'> </td>";
echo "<td><input type=text name=CustNo value='".$row['CustNo'] . "'></td>";
echo "<td><input type=text name=Address value='".$row['Address'] . "'></td>";
echo "<td><input type=text name=Area value='".$row['Area']."'></td>";
echo "<td><input type=text name=GC value='".$row['GC']."'></td>";
echo "<td><input type=submit name=Update value='update'>";
echo "</form>";

}
?>
</body>
</html>
