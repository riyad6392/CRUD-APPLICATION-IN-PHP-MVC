<?php 
  require_once 'CrudController.php';
  include('crud_connect.php');

 if(isset($_REQUEST['submit']))
 {

 	  $user=$_REQUEST['name'];
 	  $email=$_REQUEST['email'];
 	  $dg=$_REQUEST['designation'];
 	  $ad=$_REQUEST['address'];
    $hidden_id=$_REQUEST['updating_hidden_id'];

    $model = new CrudModel(HOSTNAME, USERNAME, PASSWORD, DATABASE);
    $controller = new CrudController($model);
    $result = $controller->updateEmployee($hidden_id, $user, $email, $dg, $ad);
    if($result)
    {

    	header("location:index.php?updated");
    }
 }



?>