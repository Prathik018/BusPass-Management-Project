<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <link rel="stylesheet" type="text/css" href="css/register.css">
    </head>
        <body>
        <nav class="navbar navbar-light navbar-expand-xl fixed-top"
      style=" width: 100%; background-color: rgba(0, 0, 0, 0);  padding-left: 9px;">
      <a class="navbar-brand" href="homepage.php"><img src="css/image/logo.png" alt="calligraphy-fonts" border="0"
          style="max-width: 100px; padding-left: 17px;"></a>
    </nav>
    <div class="loginbox">    
    <img src="css/image/logo.gif" class="logo"> 
    
    <h1>Register Here</h1> 
    <form action="connect.php" method="post">
        <p>Username</p>
        <input type="text" name="username" placeholder="enter username" required>
        <p>email</p>
        <input type="text" name="email" placeholder="enter email" required>
        <p>Password</p>
        <input type="password" name="password" placeholder="enter password" required>
        <input type="submit" name="register" value="register">
    </form>
    </div>
     </body>
    </head>
</html>

