<?php

$db_host = 'localhost';
$db_user = 'root'; 
$db_pass = '';
$db_name = 'AreejKhalid';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: '.mysqli_connect_error());	
}

$con = mysqli_connect('localhost','root');
if(!$con){
echo 'Not Connected to the Server';
}
if (!mysqli_select_db($con,'AreejKhalid'))
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

$sql="Update MyTable SET ShopName='$ShopName',CustName='$CustName',CustNo='$CustNo',Address='$Address',Area='$Area',GC='$GC' WHERE CustID='$CustID'";

if(!mysqli_query($con,$sql)){

echo "Not Update";
header("refresh:2; url=table.php");

}
else {
	echo "Updated";
	header("refresh:2; url=table.php");
}


?>
