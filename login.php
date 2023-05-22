<?php
include 'connect.php';
if (isset($_POST['save'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * from signin where username='$username' and password ='$password' ";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        echo "Login successful";
    } else {
        echo "Invalid details ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

</head>
</head>

<body>

    <div class="container">

        <form class="form" method="POST">
            <center>
                <h3>Login </h3>
            </center>
            <div>
                <label for="exampleInputEmail1" class="form-label">username</label>
                <input type="text" class="form-control" placeholder="enter username" id="InputEmail1" name="username">
            </div>
            <div>
                <label for="inputpassword" class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="enter password" id="inputPassword" name="password">

                <input class="form-check-input mt-4" type="checkbox" name="showpass" id="checkbox">
                <label class="form-check-label mt-4" for="showpass">showpassword </label>
            </div>

            <center>
                <div class="submit">
                    <button type="submit" class="btn btn-primary" name="save"  ">Signin</button>

                </div>

                <div class="signup_link mb-5">
                    Didn't have an account? <br>
                    <a href="http://localhost/Ragavendran_Tasks/index.php">signup</a>
                </div>
            </center>
            <form>
    </div>
</body>

</html>