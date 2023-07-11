<?php include("connect.php");
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve form data
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $email = $_POST['email'];
  $user_name = $_POST['user_name'];
  $pass_word = $_POST['pass_word'];

  

  // Check connection
  if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
  }

  // Prepare and execute the SQL statement
  $stmt = ("INSERT INTO login (name, surname, email, user_name, pass_word) VALUES ('$name', '$surname', '$email', '$user_name', '$pass_word')");
  $data = mysqli_query($conn, $stmt);

  // Check if the insertion was successful
  if ($data) {
    echo ' Register successfully';
    ?>
          <meta http-equiv="refresh" content="1; url = http://localhost/school%20management/login.php ">
    <?php
  } else {
    echo 'Error registration.';
  }

}
?>





















 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        .container {
      width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .container h2 {
      text-align: center;
    }
    .container input[type="text"],
    .container input[type="email"],
    .container input[type="password"] {
      width: 100%;
      padding: 5px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    .container input[type="submit"] {
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }
    </style>
</head>
<body>
    <div class="container">
        <h2>Registration Form</h2>
        <form method="Post">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>

          <label for="name">Surname:</label>
          <input type="text" id="name" name="surname" required>
    
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>

          <label for="user_name">Username:</label>
          <input type="text" id="user_name" name="user_name" required>
    
          <label for="pass_word">Password:</label>
          <input type="password" id="pass_word" name="pass_word" required>

          <input type="submit" value="Register">
        </form>
      </div>



      <script>
        function openNextPage(){
            window.location.href = "login.php";
        }
      </script>
</body>
</html>