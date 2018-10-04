

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
<body><form action="FileB.php" method="post">

    <div class="block">
    <label>Cust ID</label> : <input type ="text" name = "CustID">
    <br/></div>
   
    <div class="block">
    <label>ShopName</label> : <input type ="text" name = "ShopName">
    <br/></div>
   
    <div class="block">
    <label>CustName</label> : <input type ="text" name = "CustName">
    <br/></div>

    <div class="block">
    <label>CustNo</label> : <input type ="text" name = "CustNo">
    <br/></div>

   
    <div class="block">
    <label>Address</label> : <input type ="text" name = "Address">
    <br/></div>

    <div class="block">
    <label>Area</label> : <input type ="text" name = "Area">
    <br/></div>
   
    <div class="block">
    <label>GC</label> : <input type ="text" name = "GC">
    <br/></div>
    <input type="submit" value ="Insert">
   

</form>



</html>
