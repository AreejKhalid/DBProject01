<?php
$con = mysqli_connect('localhost','root');
if(!$con){
echo 'Not Connected to the Server';
}
if (!mysqli_select_db($con,'AreejKhalid'))
{
echo 'Database not Selected';
}
$SID= $_POST['SalesPersonID'];
$sql="Delete from SalesPersonTable WHERE SalesPersonID='$SID'";

if ( mysqli_query($con,$sql)){

echo 'Successfully Deleted!';

header("refresh:2; url=SPtable.php");

}

else {

echo 
'Sorry, Not  Deleted!';

}
?>
