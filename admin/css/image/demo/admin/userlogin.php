

<!DOCTYPE html>

<html>
<head>
	<title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" a href="css\font-awesome.min.css">
</head>
<body> <a class="navbar-brand" href="homepage.php"><img src="images/logo.png" alt="calligraphy-fonts" border="0"
                style="width: 100px; padding-left: 50px; padding-top: 50px;"></a>

	<div class="container">
	<img src="images/logo.gif"/>
	<h2>User login</h2>
	<form role="form" method="post" name="login">
		
			<div class="form-input">
				<input type="text" name="username" placeholder="Enter your username" required>	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="password" required>
			</div>
			<input type="submit" name="login" type="login" value="login" class="btn-login"required>
		</form>
	</div>
</body>
</html>
<?php
include("connection.php");
if(isset($_POST['login']))
{   $username=$_POST['username'];
    $password=$_POST['password'];
    $query="SELECT * FROM `userregister` WHERE `username`='$username' AND `password`='$password'";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)==1)
    {
        session_start();
        $_SESSION['adminloginid']=$_POST['username'];
        header('location:loginfeedback.html');
      }
      else { echo "<script>alert('incorrect password');</script>";
}}
?>
