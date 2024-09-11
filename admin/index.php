<!DOCTYPE html>
<html>
    <head>
        <title> bus pass management system</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
        <body>
        <nav class="navbar navbar-light navbar-expand-xl fixed-top"
      style=" width: 100%; background-color:none;  padding-left: 6px;">
      <a class="navbar-brand" href="../user/homepage.php"><img src="images/logo.png" alt="calligraphy-fonts" border="0"
          style="max-width: 100px; padding-left: 7px;"></a>
    </nav>
    <div class="loginbox">    
    <img src="images/adminlogo.gif" class="logo"> 
    <h1>admin login</h1>
    <form role="form" method="post" name="login">
        <p>Username</p>
        <input type="text" name="username" placeholder="enter username" required>
        <p>Password</p>
        <input type="password" name="password" placeholder="enter password" required>
        <input type="submit" name="login" value="login">
    </form>
    </div>
     </body>
    </head>
</html>


<?php
include("connection.php");
if(isset($_POST['login']))
{   $username=$_POST['username'];
    $password=$_POST['password'];
    $query="SELECT * FROM `adminlogin` WHERE `username`='$username' AND `password`='$password'";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)==1)
    {
        session_start();
        $_SESSION['adminloginid']=$_POST['username'];
        header('location:adminpanel.php');
      }
      else { echo "<script>alert('incorrect password');</script>";
}}
?>
