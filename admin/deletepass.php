<?php
include("connection.php");
?>
<?php
$id=$_GET['id'];
?>
<?php
if(isset($_GET['id']))
{
    ?>
    <?php

 $query= "DELETE FROM `adminpass` WHERE id=".$id;
 $qry=mysqli_query($con,$query);
 if($qry){
    ?>

    <script>
    alert("deleted");
    </script>
    <?php
 }
    ?>
    <?php
}
?>
