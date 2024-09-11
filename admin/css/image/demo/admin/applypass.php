<?php
include("connection.php") ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>apply for pass</title>
    <link rel="stylesheet" href="applypass.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
   </head>
<body>
  <div class="container">
    <div class="title">Bus Pass Application Form</div>
    <div class="content">
      <form action="" method="post" enctype='multipart/form-data'>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" name="fullname" required>
          </div>
          <div class="input-box">
            <span class="details">Profile Image</span>
            <input type="file" placeholder="" name="profileimage"  required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" name="email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span> 
            <input type="text" placeholder="Enter your number" name="phonenumber" required>
          </div>
          <div class="input-box"><span class="details">identity type</span><select type="text" name="identitytype" value="" class="input-box" required='true'>
            <option value="">Choose Identity Type</option>
            <option value="Voter Card">Voter Card</option>
            <option value="PAN Card">PAN Card</option>
            <option value="Adhar Card">Aadhar Card</option>
            <option value="Student Card">Student Card</option>
            <option value="Any Other Govt Issued Doc">Any Other Govt Issued Doc</option>
            </select></div>

            <div class="input-box">
              <span class="details">Identity card no</span>
              <input type="text" placeholder="Enter your card no" name="identitycardno" required>
            </div>
            <div class="input-box">
              <span class="details">Source</span>
              <input type="text" placeholder="enter here" name="source"required>
            </div>
            <div class="input-box">
              <span class="details">Destination</span>
              <input type="text" placeholder="Enter here"name="destination" required>
            </div>
            <div class="input-box">
              <span class="details">From Date</span>
              <input type="date" placeholder="" name="fromdate" required>
            </div>
            <div class="input-box">
              <span class="details">To date</span>
              <input type="date" placeholder="" name="todate" required>
            </div>
        
        <div class="button">
         <input type="submit" value="submit" name="submit">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
<?php

if(isset($_POST['submit']))
{
  $profileimage=$_FILES['profile_image']['name'];
  $profileimage_tmp_name=$_FILES['profile_image']['tmp_name'];
  $profileimage_folder='uploadedimages/'.$profileimage;
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$phonenumber=$_POST['phonenumber'];
$identitytype=$_POST['identitytype'];
$identitycardno=$_POST['identitycardno'];
$source=$_POST['source'];
$destination=$_POST['destination'];
$fromdate=$_POST['fromdate'];
$todate=$_POST['todate'];

  $query="INSERT INTO `passform`(`fullname`, `profileimage`, `email`, `phonenumber`, `identitytype`, `identitycardno`, `source`, `destination`, `fromdate`, `todate`) VALUES ('$fullname','$profileimage','$email','$phonenumber','$identitytype','$identitycardno','$source','$destination','$fromdate','$todate')";
	 // $conn->close();
    $data=mysqli_query($con,$query);
    if($data){
      ?>
      <script>alert("submited paynow");</script>
      <script>window.location.href="payment.php";</script>
      <?php
  
    }
    else{
      ?>
      <script>alert("failed");</script>
      <?php
    }
  }
?>