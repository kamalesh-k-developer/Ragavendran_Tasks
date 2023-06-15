<?php   
include  'connect.php';
$obj = new database();
if(isset($_GET['deleteid']))
{
$id = $_GET['deleteid'];
$obj -> deleteRecord($id);
}
?>