<?php
$id=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Admin Dashboard</title>
    <link rel="stylesheet" href="css/style2.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
      /* icons css */
      .bx-menu
      {
        font-size:40px;
      }
      .bxs-user-account
      {
        color:#11101d;
        font-size:40px;
        margin:-50px;
        margin-left:180px;
      }
      .bxs-user-check
      {
        color:#11101d;
        font-size:40px;
        margin:-50px;
        margin-left:180px;
      }

      .bx-comment-detail
      {
        color:#11101d;
        font-size:40px;
        margin:-50px;
        margin-left:180px; 
      }
      .bxs-wallet-alt
      {
        color:#11101d;
        font-size:40px;
        margin:-50px;
        margin-left:180px;
      }
      .home-section .home-content1
      {
        display:flex;
        flex-direction:row;
        justify-content:right;
        gap:6px;
        align-items:center;
        text-align:center;
    
      }
      /* cards heading css */
      h4
      {
        margin:10px;
        font-family: Arial, Helvetica, sans-serif;
      }
      h2
      {
        font-size:35px;
        margin:20px;
        color:#11101d;
      }
      h1
      {
        margin-top:-40px;
        margin-left:50px;
      }
      .home-section .home-content1 >div
      {
margin-top:70px;
margin-left:auto;
background: linear-gradient(white,lightblue);
width:300px;
height:150px;
box-shadow:2px 4px 5px 4px lightgrey;
transition:all 300ms ease;
border-radius:20px;
align-items:center;
      }
      .home-section .home-content1 >div:hover
      {
        box-shadow:none;
        transition:all 400ms ease;
      }
      /* table */
      #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-top:20px;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 5px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 30px;
  text-align: center;
  background-color:#11101d; 
  color: white;
}
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background-color:#E4E9F7;
  background-size: cover;
}
.container{
  max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
    background: #25fb77;

}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 30px;
  width: 30px;
  border-radius: 50%;
  margin-right: 10px;
  background: #000000;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
form .button{
   height: 50px;
   margin: 10px 0
 }
 form .button input{
  margin-left: 220px;
   height: 100%;
   width: 159px;
   border-radius: 9px;
   border: none;
   margin-right: 40px;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
    background: #25fb77;
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background-color: rgb(252, 231, 0);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}

     </style>
   </head>
<body>
  <div class="sidebar close">
  <?php  @include 'sidebar.php';?> 
</div>
  <!-- home section side -->
  <section class="home-section">
   <i class='bx bx-menu'></i>
  <span class="text"><h1>Dashboard</h1></span>

<?php
include("connection.php");
$qry=mysqli_query($con,"SELECT * FROM `adminpass` WHERE adminpass.id=".$id);
while ($row=mysqli_fetch_array($qry)) {
?>
<?php
$passnumber=$row['passnumber'];
$fullname=$row['fullname'];
$profileimage='uploadedimages/'.$row['profileimage'];
$email=$row['email'];
$phonenumber=$row['phonenumber'];
$clgname=$row['clgname'];
$identitytype=$row['identitytype'];
$identitycardno=$row['identitycardno'];
$source=$row['source'];
$destination=$row['destination'];
$fromdate=$row['fromdate'];
$todate=$row['todate'];
?>
<?php
}
?>
  <div class="container">
    <div class="title">Edit Pass</div>
    <div class="content">
      <form action="" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" value="<?php echo $fullname ?>"name="fullname" required>
          </div>
          <div class="input-box">
            <span class="details">Profile Image</span>
            <input type="file" name="profileimage" <?php echo $profileimage ?>  required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" value="<?php echo  $email?>  "name="email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span> 
            <input type="text"  value="<?php  echo $phonenumber ?>" name="phonenumber" required>
          </div>
          <div class="input-box">
            <span class="details">College Name</span> 
            <input type="text" placeholder="" name="clgname" value="<?php echo $clgname ?>" required>
          </div>
          <div class="input-box"><span class="details">identity type</span><select type="text" name="identitytype"  class="input-box" required='true'>
            <option ><?php echo $identitytype    ?></option>
            <option value="Voter Card">Voter Card</option>
            <option value="PAN Card">PAN Card</option>
            <option value="Adhar Card">Aadhar Card</option>
            <option value="Student Card">Student Card</option>
            <option value="Any Other Govt Issued Doc">Any Other Govt Issued Doc</option>
            </select></div>

            <div class="input-box">
              <span class="details">Identity card no</span>
              <input type="text"  value="<?php   echo $identitycardno     ?>" name="identitycardno" required>
            </div>
            <div class="input-box">
              <span class="details">Source</span>
              <input type="text" name="source"  value="<?php echo $source    ?>" required>
            </div>
            <div class="input-box">
              <span class="details">Destination</span>
              <input type="text"  name="destination"  value="<?php  echo $destination   ?>" required>
            </div>
            <div class="input-box">
              <span class="details">From Date</span>
              <input type="date" value="<?php echo $fromdate   ?>"  name="fromdate" required>
            </div>
            <div class="input-box">
              <span class="details">To date</span>
              <input type="date" value="<?php  echo $todate ?>"  name="todate" required>
            </div>
            <div class="input-box">
                <span class="details">pass number</span>
                <input type="text" value="<?php echo $passnumber ?>"  name="passnumber"required>
              </div>
              <div class="button">
              <input type="submit" value="Editpass" name="Editpass" a href="add-pass.php?id=<?php echo $row['id'];?>"></a>
        
        </div>
      </form>
    </div>
  </div>
  <script src="script.js"></script>
</body>
</html>
<?php
if(isset($_POST['Editpass']))
{
$fullname=$_POST['fullname'];
$profileimage=$_POST['profileimage'];
$email=$_POST['email'];
$phonenumber=$_POST['phonenumber'];
$clgname=$_POST['clgname'];
$identitytype=$_POST['identitytype'];
$identitycardno=$_POST['identitycardno'];
$source=$_POST['source'];
$destination=$_POST['destination'];
$fromdate=$_POST['fromdate'];
$todate=$_POST['todate'];
$passnumber=$_POST['passnumber'];
$query="UPDATE `adminpass` SET `fullname`='$fullname',`profileimage`='$profileimage',`email`='$email',`phonenumber`='$phonenumber',`clgname`='$clgname',`identitytype`='$identitytype',`identitycardno`='$identitycardno',`source`='$source',`destination`='$destination',`fromdate`='$fromdate',`todate`='$todate',`passnumber`='$passnumber',`phonenumber`='$phonenumber' ";
$data=mysqli_query($con,$query);
if($data)
{ ?>
   <script>alert("updated successfully");</script>
   <?php
}
else
{
    ?>
    <script>alert("failed");</script>
    <?php
}
}
?>