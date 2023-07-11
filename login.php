<?php
session_start();
?>




<!DOCTYPE html>
<html>
<head>
<style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
    }

    .login-form {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
    }

    .login-form h2 {
      text-align: center;
    }

    .login-form div {
      margin-bottom: 10px;
    }

    .login-form label {
      display: block;
      margin-bottom: 5px;
    }

    .login-form input[type="text"],
    .login-form input[type="password"] {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .login-form button {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      background-color: blue;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .login-form button:hover {
      background-color: #45a049;
    }

    .fp{
      margin-bottom: 10px;
      
    }
    </style>
</head>
<body>
  <form method="POST">
  <div class="login-form">
    <h2>Admin Login</h2>
    <div>
      <label for="username">Username:</label>
      <input type="text" name="user_name" id="username"  required>
    </div>
    <div>
      <label for="password">Password:</label>
      <input type="password" id="password" name="pass_word" required>
    </div>

    <div class="fp"><a href="Forgot.php" >Forgot Password?</a></div>
    <div>
      <button name="login">Submit</button>
    </div>
    
    <a href="Registration.php">New Member? Sign Up</a>
  </div>
  </form>
</body>
</html>

<?php
include("connect.php");

  if(isset($_POST['login'])){
   $ur= $_POST['user_name'];
   $pwd= $_POST['pass_word'];

   $query ="SELECT * FROM  login WHERE user_name='$ur' && pass_word ='$pwd'";

   $data =  mysqli_query($conn,$query);

   $total = mysqli_num_rows($data);

    if($total==1)
    {
      
      // header('location:adminform.php');
        
      ?>
        <meta http-equiv = "refresh" content = "0; url = http://localhost/school%20management/student.php"/>
     <?php
    }
    else{
      echo"Login Failed ";
    }




    }

?>

