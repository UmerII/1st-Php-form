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
<body>

<table>
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>Age</th>

        </tr>
    </thead>
    <tbody>
        <?php
      $select = "Select * from contact";
      $query = mysqli_query($conn,$select);
      while($row=mysqli_fetch_array($query))
      {
     ?>
     
     <tr>
     <td><?php echo $row['id']?></td>
     <td><?php echo $row['name']?></td>
     <td><?php echo $row['fname']?></td>
     <td><?php echo $row['email']?></td>
     <td><?php echo $row['address']?></td>
     <td><?php echo $row['age']?></td>
     <td><?php echo $row['regards']?></td>
     </tr>
<?php


      }
      ?>
    
    

      
  
      
        

    </tbody>
</table>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>