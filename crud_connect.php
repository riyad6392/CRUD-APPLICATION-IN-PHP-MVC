<?php 
 //define("HOSTNAME","localhost");
 //define("USERNAME","root");
 //define("PASSWORD","");
 //define("DATABASE","employee_crud");
if (!defined("HOSTNAME")) {
    define("HOSTNAME", "localhost");
}
if (!defined("USERNAME")) {
    define("USERNAME", "root");
}
if (!defined("PASSWORD")) {
    define("PASSWORD", "");
}
if (!defined("DATABASE")) {
    define("DATABASE", "employee_crud");
}
 $connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

 if(!$connection)
 {
 	die("connection faild");
 }
 
?>