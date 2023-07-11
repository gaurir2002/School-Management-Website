<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sm";


$conn=new mysqli('localhost','root','','sm');

if($conn){
//    echo"connection ok";
}
else{
    die(mysqli_error($conn));
}

?>