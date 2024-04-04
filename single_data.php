<?php
  require_once 'CrudController.php';
   include('crud_connect.php');

 if(isset($_REQUEST['edit_id']))
 {
  $recv_id=$_REQUEST['edit_id'];
  $model = new CrudModel(HOSTNAME, USERNAME, PASSWORD, DATABASE);
  $controller = new CrudController($model);
  $result = $controller->getAllEmploy($recv_id);
  while($row=mysqli_fetch_assoc($result))
  {
    

    ?>
     <form action="update_data.php" method="post">
        <input type="text" name="name" value="<?php  echo $row['name'];?>" placeholder="name">
        <input type="email" name="email" value="<?php  echo $row['email'];?>" placeholder="email">
        <input type="text" name="designation" value="<?php  echo $row['designation'];?>" placeholder="designation">
        <input type="text" name="address" value="<?php  echo $row['address'];?>" placeholder="address">
        <input type="submit" name="submit" value="update data">
        <input type="hidden" name="updating_hidden_id" value="<?php  echo $recv_id; ?>">
     </form>

    <?php

  }

 }

?>

  
