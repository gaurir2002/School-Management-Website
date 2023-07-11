<?php
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve form data
  $name = $_POST['name'];
  $age = $_POST['age'];
  $grade = $_POST['grade'];
  $class = $_POST['class'];
  $rollno = $_POST['rollno'];
  $dob = $_POST['dob'];
  $feesamount = $_POST['feesamount'];
  $paymentmethod = $_POST['paymentmethod'];

  // Connect to the database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "sm";

  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
  }

  // Prepare and execute the SQL statement
  $stmt = $conn->prepare('INSERT INTO student (name, age, grade, class, rollno, dob, feesamount, paymentmethod) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
  $stmt->bind_param('ssssssss', $name, $age, $grade, $class, $rollno, $dob, $feesamount, $paymentmethod);
  $stmt->execute();

  // Check if the insertion was successful
  if ($stmt->affected_rows > 0) {
    echo '';
  } else {
    echo 'Error adding student.';
  }

  // Close statement and connection
  $stmt->close();
  $conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Student Registration</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
    }

    .form-group input,
    .form-group select {
      width: 90%;
      padding: 10px;
      font-size: 16px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .form-group button {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      background-color:blue;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-bottom: 10px;
    }
    .form-group a{
      width: 100%;
      padding: 10px;
      font-size: 16px;
      background-color:blue;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-bottom: 10px;
    }
    
    
    

    
  </style>
</head>
<body>
  <div class="container">
    <h2>Student Registration</h2>
    <form  method="post">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text"  name="name" id="name" required>
      </div>
      <div class="form-group">
        <label for="age">Age:</label>
        <input type="text" name="age" id="age"  required>
      </div>
      <div class="form-group">
        <label for="grade">Grade:</label>
        <input type="text" name="grade" id="grade"  required>
      </div>
      <div class="form-group">
        <label for="class">Class:</label>
        <input type="text" name="class" id="class"  required>
      </div>
      <div class="form-group">
        <label for="rollno">RollNo:</label>
        <input type="text" name="rollno" id="rollno"  required>
      </div>
      <div class="form-group">
        <label for="dob">DOB:</label>
        <input type="date" name="dob" id="dob"  required>
      </div>
      <div class="form-group">
        <label for="feesamount">FeesAmount:</label>
        <input type="text" name="feesamount" id="feesamount"  required>
      </div>
      <div class="form-group">
        <label for="paymentmethod">PaymentMethod:</label>
        <input type="text" name="paymentmethod" id="paymentmethod"  required>
      </div>

      <div class="form-group">
        <button type="submit">Register</button>
      </div>
  </form>

    <div class="form-group">
       <a href="display.php"> <button>Database</button></a>
      </div>

     <div class="form-group">
       <a href="logout.php"> <button>Logout</button></a>
      </div>
  </div>

</body>
</html>