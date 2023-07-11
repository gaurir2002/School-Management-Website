<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
include("connect.php");


if($_POST['submit'])
{
    $user_name = $_POST['user_name'];
    $pass_word = $_POST['pass_word'];
 
    $query = "UPDATE login SET user_name='$user_name', pass_word='$pass_word' WHERE user_name='$user_name'";

    $data = mysqli_query($conn, $query);
    if($data)
    {
      
        echo"change password Successfully";
      ?>
        <meta http-equiv = "refresh" content = "1; url = http://localhost/school%20Management/login.php"/>
     <?php
    }
    else{
      echo"Wrong input ";
    }
}

}
?>




<!DOCTYPE html>
<html>
<head>
    <title>Update Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        
        .container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }
        
        h2 {
            text-align: center;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        input[type="text"], input[type="password"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
        input[type="submit"] {
            background-color: blue;
            color: #fff;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background-color: blue;
        }
    </style>
</head>
<body> 
    <form method="post">
    <div class="container">
        <h2>Update Password</h2>
       
            <div class="form-group">
                <label for="user_name">Username:</label>
                <input type="text" id="username" name="user_name" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
                <label for="pass_word">New Password:</label>
                <input type="text" id="password" name="pass_word" placeholder="Enter your new password" required>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Update Password">
            </div>
        
    </div>
</form>
</body>
</html>