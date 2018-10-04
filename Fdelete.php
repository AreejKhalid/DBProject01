<?php
$con = mysqli_connect('localhost','root');
if(!$con){
echo 'Not Connected to the Server';
}
if (!mysqli_select_db($con,'AreejKhalid'))
{
echo 'Database not Selected';
}
$CID= $_POST['CustID'];
$sql="Delete from MyTable WHERE CustID='$CID'";

if ( mysqli_query($con,$sql)){

echo 'Successfully Deleted!';

header("refresh:2; url=table.php");

}

else {

echo 
'Sorry, Not  Deleted!';

}
?>
