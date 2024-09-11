<?php
include("connection.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
body{
font-family: 'Roboto', sans-serif;
background-image:url(images/formbg.jpeg);
background-repeat:no-repeat;
background-size:cover;
}

.card{
	border: none;
	max-width: 450px;
	border-radius: 15px;
	margin: 150px 0 150px;
	padding: 35px;
	padding-bottom: 20px!important;
}
.heading{
	color:black;
	font-size: 14px;
	font-weight: 500;
}
img{
	transform: translate(160px,-10px);
}
img:hover{
    cursor: pointer;
}
.text-warning{
	font-size: 12px;
	font-weight: 500;
	color: #edb537!important;
}
#cno{
	transform: translateY(-10px);
}
input{
	border-bottom: 1.5px solid grey!important;
	font-weight: bold;
	border-radius: 0;
	border: 0;

}
.form-group input:focus{
	border: 0;
	outline: 0;
}
.col-sm-5{
	padding-left: 90px;
}
.btn{
	background: #F3A002!important;
	border: none;
	border-radius: 30px;
    
}
.btn:hover
{
    color:blue;
}
.btn:focus{
    box-shadow: none;
}
.card input[type="submit"]
{
    border: none;
    outline: none;
    padding: 10px;
    width: 90px;
    margin-left: 90%;
    margin-top:60%;
    background: #25fb77;
    color: #fff;
    font-size: 16px;
    border-radius: 15px;
}
.card input[type="submit"]:hover

{
    background-color:blue;
color:white;
}
    </style>
</head>
<body>
<div class="container-fluid">
	<div class="row d-flex justify-content-center">
		<div class="col-sm-12">
			<div class="card mx-auto">
				<p class="heading">PAYMENT DETAILS</p>
					<form class="card-details " method="post">
						<div class="form-group mb-0">
								<p class="text-warning mb-0">Card Number</p> 
                          		<input type="text" name="cardnumber" placeholder="enter here" size="17" id="cno"  required>
								<img src="https://img.icons8.com/color/48/000000/visa.png" width="64px" height="60px" />
                        </div>

                        <div class="form-group">
                            <p class="text-warning mb-0"> Name</p> <input type="text" name="name" placeholder="Name" size="17" required>
                        </div>
                        <div class="form-group pt-2">
                        	<div class="row d-flex">
                        		<div class="col-sm-4">
                        			<p class="text-warning mb-0">Expiry</p>
                        			<input type="text" name="expiry" placeholder="MM/YYYY" size="7" id="exp" minlength="7" maxlength="7" required>
                        		</div>
                        		<div class="col-sm-3">
                        			<p class="text-warning mb-0">Cvv</p>
                        			<input type="password" name="cvv" placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" required>
                        		</div>
                                <div class="col-sm-3">
                        			<p class="text-warning mb-0">cost</p>
                        			<input type="text" name="cost" placeholder="" size="1" minlength="3" maxlength="3"  value="500"required readonly>
                        		</div>
                        		<div class="col-sm-5 pt-0">
                                <input type="submit" name="pay" value="pay">
                        		</div>
                        	</div>
                        </div>		
					</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>
<?php
if(isset($_POST['pay']))
{
$cardnumber=$_POST['cardnumber'];
$name=$_POST['name'];
$expiry=$_POST['expiry'];
$cvv=$_POST['cvv'];
$cost=$_POST['cost'];
  $query="INSERT INTO `payment`(`cardnumber`, `name`, `expiry`, `cvv`,`cost`) VALUES ('$cardnumber','$name','$expiry','$cvv','$cost')";
	 // $conn->close();
    $data=mysqli_query($con,$query);
    if($data){
      ?>
      <script>alert("paid and successfully applied");</script>
      <script>window.location.href="homepage.php";</script>
      <?php
    }
    else{
      ?>
      <script>alert("failed");</script>
      <?php
    }}