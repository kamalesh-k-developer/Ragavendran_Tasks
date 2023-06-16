<?php
include 'connect.php';

if (isset($_POST['submit'])) {
   
    $firstname = $_POST['firstname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $qualification = $_POST['qualification'];


    $sql = "INSERT INTO registration (firstname, password, email, number, gender, dob, qualification) VALUES ('$firstname', '$password', '$email', '$number','$gender' ,'$dob', '$qualification')";
    if (mysqli_query($conn, $sql)) {
         echo "New record created successfully";
         header('location:dashboard.php');
       
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-5">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
        <!-- <span class="result"><?php $result ?></span> -->
        <form action=" " method="POST" enctype="multipart/form-data">
            <h3>Registration Form</h3>
            <div>
                <label for="Inputname" class="form-label">username</label>
                <input type="text" class="form-control" placeholder="entername" id="Inputname" name="firstname">
            </div>
            <div>
                <label for="inputpassword" class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="enterpassword" id="inputPassword" name="password">
            </div>
            <div>
                <label for=" confirm password" class="form-label">confirm password</label>
                <input type="text" class="form-control" placeholder="enterpassword" id=" confirm password" name="confirmpassword">
            </div>



            <div>
                <label for="Email" class="form-label">email</label>
                <input type="text" class="form-control" placeholder="enteremail" id="InputEmail" name="email">
            </div>
            <div>
                <label for="number" class="form-label">Number</label>
                <input type="text" class="form-control" placeholder="enternumber" id="Inputnumber" name="number">
            </div>
            <label>Gender:</label>
            <div class="px-5">
                
                <input type="radio" class="form-check-input"  name="gender" id="flexRadioDefault1" value="male" checked>
                <label class="form-check-label" for="flexRadioDefault">Male </label>
                <input type="radio" class="form-check-input"  name="gender" id="flexRadioDefault2" value="female">
                <label class="form-check-label" for="flexRadioDefault"> Female</label>
            </div>
            

            <div class="px--2">
                <label>Date of Birth:</label><br>
                <div class="px-5">
                    <input type="date" class=" form-control" id="exampleCheck1" name="dob">
                    D.O.B


                </div>
                <label>Qualification</label><br>
                <div class="px-5">
                    <select name="qualification" id= courses>

                        <option  value="B.E">B.E</option>

                        <option  value="B.SC">B.SC</option>
                        <option  value="M.SC">M.SC</option>
                        <option  value="M.E">M.E</option>
                    </select><br>

                </div>
                <center>
                    <div class="submit ">
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </center>
            </div>

        </form>
    </div>
</body>

</html>