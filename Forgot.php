<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <style>
     body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
    }

    .forgot-form {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
    }
    .forgot-form h2 {
      text-align: center;
    }
    .forgot-form div{
        margin-bottom: 10px;
    }
    .forgot-form label {
      display: block;
      margin-bottom: 5px;
    }
    .forgot-form input[type="text"],
    .forgot-form input[type="password"] {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
    .forgot-form button {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      background-color: blue;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .forgot-form button:hover {
      background-color: #45a049;
    }
    </style>
</head>
<body>
    <form method="POST">
        <div class="forgot-form">
            <h2>Forgot Password</h2>
            <div>
                <label for="email">Email:</label><br>
                <input type="text" name="email" id="email" placeholder="Enter your email" required>
              </div>
              
              <div>
                <button name="reset">Verify Username</button>
              </div>
              
        </div>
    </form>
</body>
</html>

<?php
include("connect.php");

  if(isset($_POST['reset'])){
   $email= $_POST['email'];

   $query ="SELECT * FROM login WHERE email='$email'";

   $data =  mysqli_query($conn,$query);

   $total = mysqli_num_rows($data);

    if($total==1)
    {
      
      // header('location:adminform.php');
        // $_SESSION['user_name'] = $ur;
        echo"Email Verify Successfully";
      ?>
        <meta http-equiv = "refresh" content = "1; url = http://localhost/school%20management/changepass.php"/>
     <?php
    }
    else{
      echo"Wrong Email ";
    }




    }

?>


