<?php include ("connect.php");

$id = $_GET['id'];

$query = "SELECT * FROM student where id='$id'";
$data =  mysqli_query($conn,$query);

$result = mysqli_fetch_assoc($data);
?>


<!DOCTYPE html>
<html>
<head>
  <title>Update Details</title>
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
      padding-right: 40px
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
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .form-group button {
      width: 420px;
      padding: 10px;
      font-size: 16px;
      background-color: blue;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

   
  </style>
</head>
<body>
  <div class="container">
    <h2>Update Details</h2>
    <form method="post" >
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" value="<?php echo $result['name']?>" name="name" id="name" required>
      </div>
      <div class="form-group">
        <label for="age">Age:</label>
        <input type="text"  value="<?php echo $result['age']?>" name="age" id="age" required>
      </div>
      <div class="form-group">
        <label for="grade">Grade:</label>
        <input type="text"  value="<?php echo $result['grade']?>" name="grade" id="grade" required>
      </div>
      <div class="form-group">
        <label for="class">Class:</label>
        <input type="text"  value="<?php echo $result['class']?>" name="class" id="class" required>
      </div>
      <div class="form-group">
        <label for="rollno">RollNo:</label>
        <input type="text"  value="<?php echo $result['rollno']?>" name="rollno" id="rollno" required>
      </div>
      <div class="form-group">
        <label for="dob">DOB:</label>
        <input type="date"  value="<?php echo $result['dob']?>" name="dob" id="dob" required>
      </div>
      <div class="form-group">
        <label for="feesamount">FeesAmount:</label>
        <input type="text"  value="<?php echo $result['feesamount']?>" name="feesamount" id="feesamount" required>
      </div>
      <div class="form-group">
        <label for="paymentmethod">PaymentMethod:</label>
        <input type="text"  value="<?php echo $result['paymentmethod']?>" name="paymentmethod" id="paymentmethod" required>
      </div>
      
      <div class="form-group">
        <button  type="submit" >Update</button>
      </div>
     
    </form>
     
  </div>

 



 
</body>
</html>



<?php include("connect.php");
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

 

  // Prepare and execute the SQL statement
  $stmt = "UPDATE student SET name='$name', age='$age', grade='$grade', class='$class', rollno='$rollno', dob='$dob', feesamount='$feesamount', paymentmethod='$paymentmethod' WHERE id='$id'";

  $data = mysqli_query($conn, $stmt);

  // Check if the update was successful
  if ($data) {
    echo 'Record update successfully ';
    ?>
        <meta http-equiv = "refresh" content = "1; url = http://localhost/school%20Management/display.php"/>
    <?php
  } else {
    echo 'Error updating record.';
  }
}
?>

