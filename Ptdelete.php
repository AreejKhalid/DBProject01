<?php
$con = mysqli_connect('localhost','root');
if(!$con){
echo 'Not Connected to the Server';
}
if (!mysqli_select_db($con,'AreejKhalid'))
{
echo 'Database not Selected';
}
$PID= $_POST['ProductCode'];
$sql="Delete from ProductTable WHERE ProductCode='$PID'";

if ( mysqli_query($con,$sql)){

echo 'Successfully Deleted!';

header("refresh:3; url=ProductTable.php");

}

else {

echo 
'Sorry, Not  Deleted!';

}
?>
