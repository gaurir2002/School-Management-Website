<?php
include("connect.php");

$id = $_GET['id'];

$query = "DELETE FROM student WHERE id ='$id'";

$data =  mysqli_query($conn,$query);

if ($data) {
    echo 'Record Delete successfully ';
    ?>
        <meta http-equiv = "refresh" content = "1; url = http://localhost/school%20Management/display.php"/>
    <?php
  } 
else {
    echo 'Error Deleting record.';
  }
?>