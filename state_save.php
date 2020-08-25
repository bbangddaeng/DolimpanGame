<?php
  include('connect.php');
  session_start();

  $list = $_POST['list_save'];
  $rad = $_POST['rad_save'];
  $id = $_SESSION['id'];

  $sql = "update member2 set mb_dolim='$list', mb_radian='$rad' where mb_id='$id'";
  $con->query($sql);
  echo "<script>window.alert('상태를 저장하였습니다.');</script>";
  echo "<script>location.href='dolimpan.php';</script>";

?>
