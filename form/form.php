<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title>
</head>
<style>
    h1{
        text-align: center;
    }
    label{
        font-weight: bold;
    }
</style>
<body>
<h1 >Contact Us Form</h1>
<div class="container">
    <form method="post">
    <label>Enter Your Name:</label>
    <input type="text" placeholder="Enter Your Name" name="name" class="form-control"></input>
    <label>Enter Your Father Name:</label>

    <input type="text" placeholder="Enter Your Father Name" name="fname" class="form-control"></input>
    <label>Enter Your Email:</label>

    <input type="email" placeholder="Enter Your Email" name="email" class="form-control"></input>
    <label>Enter Your Address:</label>

    <input type="text" placeholder="Enter Your Address" name="address" class="form-control"></input>
    <label>Enter Your Age:</label>
    
    <input type="number" placeholder="Enter Your Age" name="age" class="form-control"></input><br>
    <textarea name="regards" col="5" rows="5" placeholder="Please leave a note"></textarea><br>
    
     <a><button name="btn" href="index.html" type="submit" class="btn btn-success">Submit</button></a>
    </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>

<?php
if(isset($_POST['btn']))
{
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $age = $_POST['age'];
    $regards = $_POST['regards'];

  $insert = "INSERT INTO contact( name, fname, email, address, age, regards) VALUES ('$name','$fname','$email','$address','$age','$regards')";
  $result = mysqli_query($conn,$insert) ;
      if($result)
      {
          echo"<div class='alert alert-dark'>Data inserted successfully</div>";
      }
      else
  {
      echo "not inserted";
  }
  }
  
  ?>

