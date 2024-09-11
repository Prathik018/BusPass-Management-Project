<?php
include("connection.php");


?> 


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>addpass</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
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
    <?php
   $phone="9888523232";
$query1="SELECT * FROM `adminpass` WHERE `phonenumber`=$phone";
$data1=mysqli_query($con,$query1);
$result=mysqli_fetch_assoc($data1);
?>

  <div class="container">
    <div class="title">Edit Pass</div>
    <div class="content">
      <form action="" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" value="<?php echo $result['fullname']; ?>"name="fullname" required>
          </div>
          <div class="input-box">
            <span class="details">Profile Image</span>
            <input type="file" name="profileimage"  required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" value="<?php echo $result['email']; ?>  "name="email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span> 
            <input type="text"  value="<?php echo $result['phonenumber']; ?>" name="phonenumber" required>
          </div>
          <div class="input-box"><span class="details">identity type</span><select type="text" name="identitytype"  class="input-box" required='true'>
            <option ><?php echo $result['identitytype']; ?></option>
            <option value="Voter Card">Voter Card</option>
            <option value="PAN Card">PAN Card</option>
            <option value="Adhar Card">Aadhar Card</option>
            <option value="Student Card">Student Card</option>
            <option value="Any Other Govt Issued Doc">Any Other Govt Issued Doc</option>
            </select></div>

            <div class="input-box">
              <span class="details">Identity card no</span>
              <input type="text"  value="<?php echo $result['identitycardno']; ?>" name="identitycardno" required>
            </div>
            <div class="input-box">
              <span class="details">Source</span>
              <input type="text" name="source"  value="<?php echo $result['source']; ?>" required>
            </div>
            <div class="input-box">
              <span class="details">Destination</span>
              <input type="text"  name="destination"  value="<?php echo $result['destination']; ?>" required>
            </div>
            <div class="input-box">
              <span class="details">From Date</span>
              <input type="date" value="<?php echo $result['fromdate']; ?>"  name="fromdate" required>
            </div>
            <div class="input-box">
              <span class="details">To date</span>
              <input type="date" value="<?php echo $result['todate']; ?>"  name="todate" required>
            </div>
            <div class="input-box">
                <span class="details">pass number</span>
                <input type="text" value="<?php echo $result['passnumber']; ?>"  name="passnumber"required>
              </div>
        <div class="button">
         <input type="submit" value="Editpass" name="Editpass">
        </div>
      </form>
    </div>
  </div>
</body>
</html>
<?php
if(isset($_POST['Editpass']))
{
$fullname=$_POST['fullname'];
$profileimage=$_POST['profileimage'];
$email=$_POST['email'];
$phonenumber=$_POST['phonenumber'];
$identitytype=$_POST['identitytype'];
$identitycardno=$_POST['identitycardno'];
$source=$_POST['source'];
$destination=$_POST['destination'];
$fromdate=$_POST['fromdate'];
$todate=$_POST['todate'];
$passnumber=$_POST['passnumber'];
$query="UPDATE `adminpass` SET `fullname`='$fullname',`profileimage`='$profileimage',`email`='$email',`phonenumber`='$phonenumber',`identitytype`='$identitytype',`identitycardno`='$identitycardno',`source`='$source',`destination`='$destination',`fromdate`='$fromdate',`todate`='$todate',`passnumber`='$passnumber' WHERE `phonenumber`='$phonenumber' ";
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