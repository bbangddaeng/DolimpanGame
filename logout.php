<html>
  <title>Logout...</title>
</html>
<?php
  include('connect.php');
  session_start();

  $save_t = $_POST['save'];
  $id = $_SESSION['id'];
  $radian = $_POST['rad'];

//  echo "<script>window.alert($id)</script>";

  $sql = "update member2 set mb_dolim='$save_t', mb_radian='$radian' where mb_id='$id'";
  $con->query($sql);

  if($_SESSION['id']!=null){
    session_destroy();
  }
  echo"<script>location.href='login.php';</script>";
?>
