<?php
  $db_host = "localhost";
  $db_user = "root";
  $db_password = "fhfhg";
  $db_name = "user";

//  $con = new mysqli($db_host, $db_user, $db_password, $db_name);

  $con = mysqli_connect($db_host, $db_user, $db_password, $db_name);

  if($con->connect_errno){
    die("Connection failed: ".$con->connet_error);
  }
  else{
    echo"DB Connected";
  }
?>
