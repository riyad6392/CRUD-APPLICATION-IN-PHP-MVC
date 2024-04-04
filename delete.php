<?php
  require_once 'CrudController.php';
  include('crud_connect.php');
$recv=$_REQUEST['id'];
$model = new CrudModel(HOSTNAME, USERNAME, PASSWORD, DATABASE);
$controller = new CrudController($model);
$result = $controller->deleteEmployee($recv);
 
if($result)
 {
     	header("location:index.php?deleted");
 }
  
  
    
?>