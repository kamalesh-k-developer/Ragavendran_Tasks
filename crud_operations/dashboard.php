<?php
include 'connect.php';
?>
<!DOCTYPE html>

<html lang="en">
  

<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>dashboard</title>
    <link rel="stylesheet" href="style.css">
    <!-- <script src= "vallid.js"> -->
    
    <link rel="stylesheet" href="bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</head>
<body>
  <div class="dashboard">
<ul>
  <li><a href="#">Home</a></li>
  <li><a href="#">About</a></li>
  <li style="float:right"><a href="http://localhost/crud_operation/login.php">Logout</a></li>
</ul>
    <div class ="container">
   <h2> Employee details</h2>
   <a href="http://localhost/crud_operation/index.php" class="btn btn-success" pull-right> Add Employees</a>
   <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Firstname</th>
      <th scope="col">password</th>
      <th scope="col">email</th>
      <th scope="col">number</th>
      <th scope="col">gender</th>
      <th scope="col">dob</th>
      <th scope="col">qualification</th>
      <th scope="col">operations</th>

    </tr>
  </thead>
  
    <?php
    $sql="select * from registration";
    $result=mysqli_query($conn,$sql);
    if($result){
      while($row=mysqli_fetch_assoc($result))
      {
        $id=$row['id'];
        $firstname = $row['firstname'];
    $password = $row['password'];
    $email = $row['email'];
    $number = $row['number'];
    $gender = $row['gender'];
    $dob = $row['dob'];
    $qualification = $row['qualification'];

    echo '<tr>
    <th scope="row">'.$id.'</th>
    <td>'.$firstname.'</td>
   <td>'.$password.'</td>
    <td>'.$email.'</td>
    <td>'.$number.'</td>
    <td>'.$gender.'</td>
    <td>'.$dob.'</td>
    <td>'.$qualification.'</td>
    <td>
      <button class= "btn btn-primary"> <a href="update.php? updateid='.$id.'" class= "text-light">update </a></button>
      <button class = "btn btn-danger" ><a href="delete.php?deleteid= '.$id.'" class= "text-light">delete </a></button>

    </td>
    </tr>';
      }
    }
    ?>
    
      </table>
    </body>
    </html>



  
  



      
      
    
    

