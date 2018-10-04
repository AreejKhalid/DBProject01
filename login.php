<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {

      // username and password sent from 
      
      $myusername = mysqli_real_escape_string($db,$_POST['UserName']);
      $mypassword = mysqli_real_escape_string($db,$_POST['Password']); 
      
      $sql = "SELECT UserName FROM UserTable WHERE UserName = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Sorry! Your Username or Password seems invalid.";
      }
   }
?>
<html>


     
   <head>

      <title>Login Page</title>

<br />
<br />



<!DOCTYPE html>

<html>
<head>
<style>


p {
    font-family: "Pacific Again";
    
}

p {
    font-size: 85px;
}

body {
    background-image: url('splash.gif');
   
    background-attachment: scroll;
    background-position: 40px 30px;
}

body {

    background-image: url('splash.gif');
    background-attachment: scroll;
    background-position: 1050px 40px;



}


</style>
</head>
<body>

<img src="splash.gif" alt="Splash" style="float:right;width:90px;height:100px;">

<p class="italic" align="center" > The Painting Palette </p>

<img src="splash.gif" alt="Splash" style="float:left;width:90px;height:100px;">

</body>
</html>
      
      <style type = "text/css">
         body {
            font-family:"Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
            font-size:35px;
         }

         label {
            font-weight:bold;
            width:200px;
            font-size:30px;
         }
         .box {
            border:#666666 solid 6px;

                padding:9px 35px; 
		background:#f3e9fc;
		width:400px;
		border-radius:50px;
		box-shadow: 10px 10px 6px;
}

	





         }
      </style>
      
   </head>
   
   <body bgcolor = "#dabcf6">



      <div align = "center">
         <div style = "width:600px; height:400px ; border: solid 3px #333333; " align = "center">



            <div style = "background-color:#333333; color:#FFFFFF; padding:21px;"><b>L O G I N</b></div>
				
            <div style = "margin:20px">
               
               <form action = "" method = "post">

                  <label> UserName  : </label><input type = "text" name = "UserName" class = "box"/><br /><br />
                  <label> Password  :    </label><input type = "password" name = "Password"  class = "box"/><br /><br />

                  <input type = "submit" value = " SUBMIT "/><br />

<img src="splash.gif" alt="Splash" style="float:none;width:90px;height:100px;">


               </form>
               
              
					
            </div>
				
         </div>

			
      </div>

   </body>
</html>



