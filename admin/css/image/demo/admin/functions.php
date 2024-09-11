<?php 

  require_once 'connection.php';

  function dispaly_data(){
    global $con;
    $query = "select * from adminpass";
    $result = mysqli_query($con,$query);
    return $result;
  }

?>
<?php 

require_once 'connection.php';

function display_data(){
  global $con;
  $query = "select * from feedback";
  $result = mysqli_query($con,$query);
  return $result;
}

?>
<?php 

require_once 'connection.php';

function displayy_data(){
  global $con;
  $query = "select * from passform";
  $result = mysqli_query($con,$query);
  return $result;
}

?>
<?php 

require_once 'connection.php';

function displayyy_data(){
  global $con;
  $query = "select * from payment";
  $result = mysqli_query($con,$query);
  return $result;
}
?>