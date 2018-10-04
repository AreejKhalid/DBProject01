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


$SalesPersonID = $_POST['SalesPersonID'];
$Name = $_POST['Name'];
$ContactNumber = $_POST['ContactNumber'];
$CustID = $_POST['CustID'];




echo 'Inserted';

$sql = "Insert into SalesPersonTable VALUES ('$SalesPersonID','$Name','$ContactNumber','$CustID')";


if (!mysqli_query($conn,$sql))
{

echo 'Not Inserted';

}
else 
{




header("refresh:1; url=SPtable.php");
}
?>

