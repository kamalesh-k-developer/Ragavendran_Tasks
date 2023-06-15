<?php   
class database {
    private $servername ='localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'sample';
    private $connection;
    function __construct(){ //
    $this->connection = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
    if ($this->connection->connect_error) {
        echo 'database connection fail';
    } else {
        return $this->connection;
    }    
}
public function insertRecord($post) {
  $name = $post['name'];
  $email = $post['email'];
  $dob = $post['dob'];
  $password = $post['password'];
  $confirmpassword = $post['confirm_password'];
  if($password == $confirmpassword){
        echo "password  match";    
  }else{
    echo "password not match";
     exit;
  }
  $sql = "INSERT INTO crud (name,email,dob,password)  VALUES ('$name','$email','$dob','$password')";
  $result = $this->connection->query($sql);
  if($result){
    header('location:select.php?msg=ins');
  }
}
public function displayRecord(){
  $sql = "SELECT *  FROM crud ";
  $result = $this->connection->query($sql);
  if ($result->num_rows>0){
    while ($row = $result->fetch_assoc()) {
      $data[] = $row;
    }
    return $data; 
  }
}
public function updateRecord($post){
  $id = $post ['id'];
  $name = $post['name'];
  $email = $post['email'];
  $dob = $post['dob'];
  $password = $post['password'];
  $confirmpassword = $post['confirm_password'];
  if($password == $confirmpassword){
        echo "password  match";    
  }else{
    echo "password not match";
     exit;
  }
  $sql = "UPDATE crud SET name = '$name',email = '$email', dob = '$dob',password = '$password' WHERE id = $id ";
  $result = $this->connection->query($sql);
  if($result){
    header ("location:select.php");
  }
}
   public function deleteRecord($id){
   $sql = "  DELETE FROM crud WHERE id = $id";
   $result = $this->connection->query($sql);
   if($result){
    header('location:select.php');
   }
  }
public function displayRecordWithId($id){
  $sql = "SELECT *  FROM crud WHERE id = $id";
  $result = $this->connection->query($sql);
  if ($result->num_rows>0){
    while ($row = $result->fetch_assoc()) {
      $data[] = $row;
    }
    return $data; 
  }
}
}
?>