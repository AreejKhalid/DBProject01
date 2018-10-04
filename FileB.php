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

if (!mysqli_select_db($conn,'AreejKhalid'))
{


echo 'Database not Selected';

}

$CustID = $_POST['CustID'];
$ShopName = $_POST['ShopName'];
$CustName = $_POST['CustName'];
$CustNo = $_POST['CustNo'];
$Address = $_POST['Address'];
$Area = $_POST['Area'];
$GC = $_POST['GC'];



echo 'Inserted';

$sql = "Insert into MyTable VALUES ('$CustID','$ShopName','$CustName','$CustNo','$Address','$Area','$GC')";


if (!mysqli_query($conn,$sql))
{

echo 'Not Inserted';

}
else 
{
}


header("refresh:1; url=table.php");


?>

