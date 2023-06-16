<?php   
include  'connect1.php';
$obj = new database();
if(isset($_GET['deleteid']))
{
$id = $_GET['deleteid'];
$obj -> deleteRecord($id);
}
?>