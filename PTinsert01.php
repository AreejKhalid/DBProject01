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

?>
<html>

<style>

body {background-color: #e3edea;
    color : black;
}

form {
font-family:Comic Sans Ms; text-align: center;

}
label {
  display: inline-block;
  width: 140px;
  text-align: right;
}

</style>
<form action="PTinsert.php" method="post">

</html><div class="block">
    <label>Product Code</label> : <input type ="text" name = "ProductCode">
    <br/></div>
   
    <div class="block">
    <label>Brand</label> : <input type ="text" name = "Brand">
    <br/></div>
   
    <div class="block">
    <label>Type</label> : <input type ="text" name = "Type">
    <br/></div>

    <div class="block">
    <label>Shade</label> : <input type ="text" name = "Shade">
    <br/></div>

   
    <div class="block">
    <label>Size</label> : <input type ="text" name = "Size">
    <br/></div>

    <div class="block">
    <label>Sales Price</label> : <input type ="text" name = "SalesPrice">
    <br/></div>
 <br/>
	<br/>

 <input type="submit" value ="Insert">
   
</form>



</html>

