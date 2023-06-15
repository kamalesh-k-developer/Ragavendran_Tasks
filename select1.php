<?php
include 'connect.php';
$obj = new database();
?>
<!doctype html>
<html lang="en">
  <head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Display The Data</title>
  </head>
  <body>
    <div class="container">
  <table class="table">
    <button  class="btn btn-primary"><a href="index.php" class="text-light">Add User</a> </button>
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Dob</th>
      <th scope="col">Password</th>
      <th>Operation</th>
    </tr>
  </thead>
 <?php 
$result = $obj->displayRecord();
$sno = 1;
if($result){
  foreach($result as $val) {
    $id = $val['id'];
    $name = $val['name'];
    $email = $val['email'];
    $dob = $val['dob'];
    $password=$val['password'];
    echo ' <tr>
    <th scope = "row">'.$sno.'</th>
    <td>'.$name.'</td>
    <td>'.$email.'</td>
    <td>'.$dob.'</td>
    <td>'.$password.'</td>
    <td>
    <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
    <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
    </td>
  </tr>';
  $sno++;
  }
}
    ?>
</table>
</div>
  </body>
</html>
