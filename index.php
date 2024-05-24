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
    .btn{
        height: 20px;
        width: 20px;
        border: 2px solid red;
            }
</style>
<body>

<div class="container">
    <form method="post">
        <input type="text" placeholder="Enter your name" name="name" class="form-control">
        <input type="number" placeholder="Enter your age" name="age" class="form-control">
        <button  type="submit" value="submit" name="btn">submit</button>

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
    $age = $_POST['age'];


 $insert = "INSERT INTO contact( name, Age) VALUES ('$name','$age')";

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