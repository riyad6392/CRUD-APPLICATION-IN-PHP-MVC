<?php
  require_once 'CrudController.php';
    include('crud_connect.php');

   if(isset($_REQUEST['submit']))
 {

    $user=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $dg=$_REQUEST['designation'];
    $ad=$_REQUEST['address'];
    $id_f=$_REQUEST['id'];

    $sl_f=$_REQUEST['salary'];
    $st_f=$_REQUEST['status'];


    $model = new CrudModel(HOSTNAME, USERNAME, PASSWORD, DATABASE);
    $controller = new CrudController($model);
    $result = $controller->createEmployee($user, $email, $dg, $ad,$id_f,$sl_f,$st_f);
    if($result)
    {

      header("location:index.php?updated");
    }
 }


?>