

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

$ProductCode = $_POST['ProductCode'];
$Brand = $_POST['Brand'];
$Type = $_POST['Type'];
$Shade = $_POST['Shade'];
$Size = $_POST['Size'];
$SalesPrice = $_POST['SalesPrice'];


echo 'Inserted';

$sql = "Insert into ProductTable VALUES ('$ProductCode','$Brand','$Type','$Shade','$Size','$SalesPrice')";


if (!mysqli_query($conn,$sql))
{

echo 'Not Inserted';

}
else 
{
}


header("refresh:5; url=ProductTable.php");


?>


