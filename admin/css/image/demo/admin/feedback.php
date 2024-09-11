<?php
include("connection.php") ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Feedback</title>
    <meta name="viewport" content="width=device-width,
      initial-scale=1.0"/>
  <link rel="stylesheet" href="feedback.css">
  </head>
  <body>
    <center>
        <div class="container">
      <h1 class="form-title">Give Your Feedback </h1>
      <form action="#" method="post">
        <div class="main-user-info">
          <div class="user-input-box">
            <label for="fullName">Full Name</label>
            <input type="text"
                    id="fullName"
                    name="fullname"
                    placeholder="Enter Full Name"/>
          </div>
          
          <div class="user-input-box">
            <label for="email">Email</label>
            <input type="email"
                    id="email"
                    name="email"
                    placeholder="Enter Email"/>
          </div>
          <div class="user-input-box">
            <label for="phoneNumber">Phone Number</label>
            <input type="text"
                    id="phoneNumber"
                    name="phonenumber"
                    placeholder="Enter Phone Number"/>
          </div>
          
          <div class="user-input-box">
            <label for="Age">Age</label>
            <input type="number"
                    id="Age"
                    name="age"
                    placeholder="Age"/>
          </div>
        </div>
		<center>
        
		<div class="row">
			<div class="col-md-2"></div>
			<center><label class="col-md-8">Message<br>
				<textarea style="border-radius: 5px;"  required=""placeholder="Write your message here" cols="48" rows="5" name="message"></textarea></label>
		</div>
        <div class="form-submit-btn">
          <input type="submit" value="Submit" name="submit">
        </div>
      </form>
    </div>
</center>
  </body>
</html>
<?php
if(isset($_POST['submit']))
{
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$phonenumber=$_POST['phonenumber'];
$age=$_POST['age'];
$message=$_POST['message'];
  $query="INSERT INTO `feedback`(`fullname`, `email`, `phonenumber`, `age`, `message`) VALUES ('$fullname','$email','$phonenumber','$age','$message')";
	 // $conn->close();
    $data=mysqli_query($con,$query);
    if($data){
      ?>
      <script>alert("submited");</script>
      
      <?php
  
    }
    else{
      ?>
      <script>alert("failed");</script>
      <?php
    }}