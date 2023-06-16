     <?php
include 'connect1.php';
$obj = new database();
$id = $_GET['updateid'];
$fetchRecord = $obj->displayRecordWithId($id);
    if(!empty($fetchRecord)){
      $name = $fetchRecord[0]['name'];
      $email = $fetchRecord[0]['email'];
      $dob = $fetchRecord[0]['dob'];
      $password = $fetchRecord[0]['password'];
    }
if (isset($_POST['update'])) {
  $obj->updateRecord($_POST);
}
?> 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Update the Data</title>
  </head>
  <body>
   <div class = "container">
   <form method = "post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="<?php echo $name; ?>">
     </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">DOB</label>
    <input type="date" class="form-control" id="exampleInputEmail1" name="dob" value="<?php echo $dob; ?>">
     </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="<?php echo $password; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="confirm_password">
  </div>
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  <button type="submit" class="btn btn-primary" name="update" value="submit">Update</button>
</form>
   </div>
  </body>
</html>  