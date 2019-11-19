<?php 
include "config.php";
session_start();
if(isset($_POST['login']))
{
$username=$_POST["login"];
$password=$_POST["password"];
$sql="SELECT h.manager_id,e.password FROM hostel h,employee e WHERE h.manager_id='$username' and e.password='$password' ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

//If username and password exist in our database then create a session.
//Otherwise echo error.

if(mysqli_num_rows($result) == 1)
{
$_SESSION['username'] = $login_user; // Initializing Session
header("location: dashboard.php"); // Redirecting To Other Page
}else
{
$error = "Incorrect username or password.";
}

}
			
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <title>HostelManagementSystem</title>
    <link rel="stylesheet" href="index.css" />
    

</head>
<body>
<div height="100%">
  <img src="C:\wamp64\www\Hostel_Mgt_System\1552457480php6LZTsx.jpeg" alt="">
</div>
<div class="login">
    <h1>Login to Hostel Management System</h1>
    <form method="post" action="">
      <p><input type="text" name="login" value="" placeholder="Username or Email"></p>
      <p><input type="password" name="password" value="" placeholder="Password"></p>
      
        
      </p>
      <p class="submit"><input type="submit" name="commit" value="Login" action="home.php"></p>
    </form>
  </div>
  

</body>
</html>
