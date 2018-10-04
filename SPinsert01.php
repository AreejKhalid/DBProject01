<html>
<head>
<title> My CRUD Page </title>
</head>
<body>
<style>

label{
display: inline-block;
width: 140px;
text-align:right;
}
</style>


<form action="SPinsert.php" method="post">

	<div class = "block">

	<label>SalesPersonID</label> : <input type ="text" name = "SalesPeronID">
	<br/></div>
	
	<div class = "block">	

	<label>Name</label> : <input type ="text" name = "Name">
	<br/></div>
	
	ContactNumber : <input type ="text" name = "ContactNumber">
	<br/>

	CustNo : <input type ="text" name = "CustNo">
	<br/>
	CustID : <input type ="text" name = "CustID">
	<br/>
        <br/>
	<br/>
	<input type="submit" value ="Insert">


</form>


</body>

</html>
