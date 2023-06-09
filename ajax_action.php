<?php

  $con=mysqli_connect("localhost","root","","sample");
  
  $action=$_POST["action"];
  if($action=="Insert"){
    $name=$_POST["name"];
    $gender=$_POST["gender"];
    $contact=$_POST["contact"] ;
    $sql="insert into ajax (NAME,GENDER,CONTACT) values ('{$name}','{$gender}','{$contact}') ";
    if($con->query($sql)){
      $id=$con->insert_id;
      echo "
        <tr uid='{$id}'>
          <td>{$name}</td>
          <td>{$gender}</td>
          <td>{$contact}</td>
          <td><a href='#' class='btn btn-primary edit'>Edit</a></td>
          <td><a href='#' class='btn btn-danger delete'>Delete</a></td>
        </tr>";
    }else{
      echo false;
    }
  }else if($action=="Update"){
    $id=$_POST["id"];
    $name=$_POST["name"];
    $gender=$_POST["gender"];
    $contact=$_POST["contact"];
    $sql="update ajax SET NAME='{$name}',GENDER='{$gender}',CONTACT='{$contact}' where ID='{$id}'";
    if($con->query($sql)){
      echo "
        <td>{$name}</td>
        <td>{$gender}</td>
        <td>{$contact}</td>
        <td><a href='#' class='btn btn-primary edit'>Edit</a></td>
        <td><a href='#' class='btn btn-danger delete'>Delete</a></td>";
        
    }else{
      echo false;
    }
  }else if($action=="Delete"){
    $id=$_POST["uid"];
    $sql="delete from ajax where ID='{$id}'";
    if($con->query($sql)){
      echo true;
    }else{
      echo false;
    }
  }
?>