<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Submit Form Data Using Ajax</title>
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="action.js"></script>
  
<body>
  

            <form action="#" method="post" id="manage_user">
              <div class="form-group">
                <h2>Registration form</h2>
                <label for="name">Username</label>
                <input type="text" class="form-control " name="firstname" placeholder="Enter Username">
              </div>
              <br>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control " name="password" placeholder="**********">
              </div>
               <div class="form-group">
                <label > Email</label>
                <input type="email" class="form-control " name="email" placeholder="test@gmail.com">
              </div>
              <br>

                            <div class="form-group">
                              <label >Number</label>
                <input type="text" class="form-control " name="number" placeholder="Enternumber">
              </div>
              <br>
              
              <!-- <br> -->
                <label>Gender:</label>
            <div class=" px-5">

                <input type="radio" class="form-check-input"  name="gender" id="flexRadioDefault1" value="male" checked>
                <label class="form-check-label" for="flexRadioDefault">Male </label>
                <input type="radio" class="form-check-input"  name="gender" id="flexRadioDefault2" value="female">
                <label class="form-check-label" for="flexRadioDefault"> Female</label>
            </div>


            <div class="px--2">
                <label>Date of Birth:</label><br>
                <div class="px-5">
                    <input type="date" class=" form-control" id="exampleCheck1" name="dob">
                  


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
                
                <div><label > Uploadimage</label>
                 <input type="file" id="myFile" name="file">
            </div>

              <div id="error_msg"></div
              <div class="form-group">
                <center>
                <button class="btn btn-primary" type="submit">Submit</button>
                </center>
              </div> 
            </form>
        </div>
      </div>
   
</body>
</html>