<?php
$id=$_GET['id'];
?>
<?php
include("connection.php");
$qry=mysqli_query($con,"SELECT * FROM `adminpass` WHERE adminpass.id=".$id);
while ($row=mysqli_fetch_array($qry)) {
?>
<?php
$passnumber=$row['passnumber'];
$fullname=$row['fullname'];
$profileimage='../admin/uploadedimages/'.$row['profileimage'];
$clgname=$row['clgname'];
$source=$row['source'];
$destination=$row['destination'];
$fromdate=$row['fromdate'];
$todate=$row['todate'];
?>
<?php
}
?>
<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>downloadpass</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="css/viewpass.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  padding: 20px;
  background:white;
}
.wrapper{
  max-width: 1090px;
  width: 100%;
  margin: auto;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}
.wrapper .table{
  background:lightblue;
  width: calc(50% - 20px);
  padding: 30px 30px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
  margin-left:320px;
  margin-top:40px;
}
.table .price-section{
  display: flex;
  justify-content: center;
}
.table .price-area{
  height: 120px;
  width: 120px;
  border-radius: 50%;
  padding: 2px;
}
.price-area .inner-area{
  height: 100%;
  width: 100%;
  border-radius: 50%;
  border: 3px solid #fff;
  line-height: 117px;
  text-align: center;
  color: #fff;
  position: relative;
}
.price-area .inner-area .text{
  font-size: 25px;
  font-weight: 400;
  position: absolute;
  top: -10px;
  left: 17px;
}
.price-area .inner-area .price{
  font-size: 45px;
  font-weight: 500;
  margin-left: 16px;
}
.table .package-name{
  width: 100%;
  height: 2px;
  margin: 35px 0;
  position: relative;
}
.table .package-name::before{
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 25px;
  font-weight: 500;
  background: #fff;
  padding: 0 15px;
  transform: translate(-50%, -50%);
}
.table .features li{
  margin-bottom: 15px;
  list-style: none;
  display: flex;
  justify-content: space-between;
}
.features li .list-name{
  font-size: 17px;
  font-weight: 400;
}
.features li .icon{
  font-size: 15px;
}
.features li .icon.check{
  color: #2db94d;
}
.features li .icon.cross{
  color: #cd3241;
}
.btn{
  width: 100%;
  display: flex;
  margin-top: 45px;
  justify-content: center;
}
.btn button{
  width: 30%;
  height: 40px;
  font-size: 20px;
  font-weight: 500;
  border: none;
  outline: none;
  border-radius: 50px;
  cursor: pointer;
  transition: all 0.3s ease;
  background-color:yellow;
  margin-left:90px;
}
.basic .features li::selection{
  background: #ffd861;
}
.basic ::selection,
.basic .price-area,
.basic .inner-area{
  background: #ffd861;
}
 .btn button{
  border: 2px solid #ffd861;
  color: black;
}
.btn button:hover{
  background: #43ef8b;
  color: blue;
}
.basic .package-name{
  background: #ffecb3;
}
.basic .package-name::before{
  content: "PassInfo";
}
@media (max-width: 1020px) {
  .wrapper .table{
    width: calc(50% - 20px);
    margin-bottom: 40px;
  }
}
@media (max-width: 698px) {
  .wrapper .table{
    width: 100%;
  }
}
::selection{
  color: #fff;
}
.table .ribbon{
  width: 150px;
  height: 150px;
  position: absolute;
  top: -10px;
  left: -10px;
  overflow: hidden;
}
.table .ribbon::before,
.table .ribbon::after{
  position: absolute;
  content: "";
  z-index: -1;
  display: block;
  border: 7px solid #4606ac;
  border-top-color: transparent;
  border-left-color: transparent;
}
.table .ribbon::before{
  top: 0px;
  right: 15px;
}
.table .ribbon::after{
  bottom: 15px;
  left: 0px;
}
.table .ribbon span{
  position: absolute;
  top: 30px;
  right: 0;
  transform: rotate(-45deg);
  width: 200px;
  background: #a26bfa;
  padding: 10px 0;
  color: #fff;
  text-align: center;
  font-size: 17px;
  text-transform: uppercase;
  box-shadow: 0 5px 10px rgba(0,0,0,0.12);
}
.price-area .inner-area img {
    border-radius:60%;
    height:110px;
    width:110px;
    margin-bottom:9px;
}

    </style>
</head>
<body>
  <div class="wrapper" id="gfg">
          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
        <center>   <h1 class="text-black"style="text-shadow: 2px 2px 4px #000000;margin-left:330px;">
              Download pass</h1></center>
            <div style="font-size: 17px;">
              <a href="homepage.php"
                style="color:black;  text-shadow: 2px 2px 4px black, 0 0 25px rgb(129, 121, 121), 0 0 2px rgb(196, 184, 184); margin-left:500px;">Home</a>
</div>
</div>
    <div class="table basic" id="printdata">
      <div class="price-section">
        <div class="price-area">
          <div class="inner-area">
            <img src="<?php echo $profileimage ?>" alt="">
            <!-- <span class="text">$</span>
            <span class="price">29</span> -->
          </div>
        </div>
      </div>
      <div class="package-name"></div>
      
      <ul class="features">
        <li>
         <label for=""><b>Name:</b></label> <p style="margin-right:340px;"><?php echo $fullname ?></p>
        </li>
        <li>
         <label for=""><b>College Name :</b></label><p style="margin-right:100px;"><?php echo $clgname ?></p>
        </li>
        <li>
         <label for=""><b>Source:</b></label> <p style="margin-right:320px;"><?php echo $source ?></p>
        </li>
        <li>
         <label for=""><b>Destination:</b></label> <p style="margin-right:300px;margin-left:20px;"><?php echo $destination ?></p>
        </li>
        <li>
         <label for=""><b>Fromdate:</b></label> <p style="margin-right:260px;"><?php echo $fromdate ?></p>
        </li>
        <li>
         <label for=""><b>Todate:</b></label> <p style="margin-right:260px;"><?php echo $todate ?></p>
        </li>
        <li>
         <label for=""><b>Pass number:</b></label> <p style="margin-right:280px;"><?php echo $passnumber?></p>
        </li>
      </ul> 
    </div>
    <div class="btn"><button onclick="printpecificdata()">Print</button></div>
       <p style="color: black; margin-left:400px;margin-top:200px;">Copyright © 2022 All Rights Reserved by <a href="https://instagram.com/theinfinite.designer">Bus
            Pass </a><a href="#"><i class="fa fa-arrow-circle-up pl-1" style="color: black;"></i></a></p>
    
    <script type="text/javascript">

    function printpecificdata()
    {
        var print_div = document.getElementById("printdata");
        var print_area = window.open();
        print_area.document.write(print_div.innerHTML);
        print_area.document.close();
        print_area.focus();
        print_area.print();
        print_area.close();
    // This is the code print a particular div element
    }
    </script>
</body>
</html>