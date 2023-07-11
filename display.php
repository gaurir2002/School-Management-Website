<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
    <style>
            body{
                background-color: rgb(156, 156, 199);
            }
            table{
                background-color: white ;
            }

            .update , .Delete{
                background-color: green;
                color: white;
                border-radius: 3px; 
                cursor: pointer;
            }
            .Delete{
                background-color: red;
            }
            .lg,.st{
                width: 70px;
                padding: 10px;
                font-size: 16px;
                background-color: red;
                border-radius: 5px;
                cursor: pointer;
            }
            .st{
                background-color: green;
                width:100px
            }
            .lgt{
                color:white;
                text-decoration:none;
            }
            .stu{
                color:white;
                text-decoration:none;
                font-size:small;
            }
        </style>
</head>
<body>
        <button class="lg"><a href="logout.php" class="lgt">Logout</a></button>
        <button class="st"><a href="student.php" class="stu">Add Student</a></button>
</body>
</html>

<?php
include("connect.php");
error_reporting(0);

  
$query = "SELECT * FROM student ";
$data =  mysqli_query($conn,$query);

$total = mysqli_num_rows($data);


if($total != 0)
{
    ?>
        <h2 align="center">All Records</h2>

       <table align="center" border ="3px" cellspacing="10">
        <tr>
        <th width="100px">Id</th>
         <th width="100px">Name</th>
         <th width="100px">Age</th>
         <th width="100px">Grade</th>
         <th width="100px">Class</th>
         <th width="150px">RollNo</th>
         <th width="150px">DOB</th>
         <th width="150px">FeesAmount</th>
         <th width="150px">PaymentMethod</th>
         <th width="150px">Operations</th>
        </tr>
      
    <?php
    while($result = mysqli_fetch_assoc($data))
    {

        echo 
        "<tr>

        <td>".$result['id']."</td>
        <td>".$result['name']."</td>
        <td>".$result['age']."</td>
        <td>".$result['grade']."</td>
        <td>".$result['class']."</td>
        <td>".$result['rollno']."</td>
        <td>".$result['dob']."</td>
        <td>".$result['feesamount']."</td>
        <td>".$result['paymentmethod']."</td>
        
        <td>
        <a  href='update.php?id=$result[id]'><input type='submit' value='Update' class='update'>
        </a>
        <a  href='Delete.php?id=$result[id]'><input type='submit' value='Delete' class='Delete' onclick ='return checkdelete()'>
        </a>
        </td>
        </tr>";
    }


}
else
{
    echo "no record form";
}



?> 
</table>

<script>
    function checkdelete(){
        return confirm('Are you sure you want to delete this data');
    }

</script>

 
</html>
