<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Admin Dashboard</title>
    <link rel="stylesheet" href="style2.css">
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
     </style>
   </head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
    <i class='bx bxs-bus-school'></i>
      <span class="logo_name">BPMS</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="#">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Dashboard</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
          <i class='bx bx-id-card'></i>
            <span class="link_name">Passes</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Passes</a></li>
          <li><a href="applications-.php">Applications</a></li>
          <li><a href="manage-pass.php">managepass</a></li>
          
        </ul>
      </li>
    
      
      <li>
        <div class="iocn-link">
          <a href="#">
          <i class='bx bx-user-pin'></i>
            <span class="link_name">Feedback</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Feedback</a></li>
          <li><a href="view-feedback.php">feedback recieved</a></li>
      
        </ul>
      </li>
      <li>

        <a href="#">
        <i class='bx bx-wallet'></i>
          <span class="link_name">payment</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="admin-pay.php">payment</a></li>
        </ul>
      </li>

      
    <!-- profile details down -->
      <li>
    <div class="profile-details">
      <div class="profile-content">
        <img src="images/adminlogo.gif" alt="profileImg">
      </div>
      <div class="name-job">
        <div class="profile_name">admin</div>
        <div class="job">BPMS</div>
      </div>
      <a href="homepage.php"><i class='bx bx-log-out'></i></a>
    </div>
  </li>
</ul>
  </div>
  <!-- home section side -->
  <section class="home-section">
   <i class='bx bx-menu'></i>
  <span class="text"><h1>Dashboard</h1></span>
  <?php
  include ("applications.php")
  ?>
  </section>
  <script src="script.js"></script>
</body>
</html>
