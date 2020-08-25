<html>
  <title>Checking...</title>
</html>
<?php

session_start();
include("connect.php");

//echo"<script>if(confirm('진짜로 삭제할거야?')){}</script>";

$id = $_POST['id'];
$pwd = $_POST['pwd'];
$pwd2 = $_POST['pwd2'];

$query = "select * from member2 where mb_id='$id' and mb_password='$pwd'";

$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
if($id == ''){
  echo "<script>location.href = 'login.php';</script>";
}
else if(($id == $row['mb_id']) && ($pwd == $row['mb_password'])){
    $deleteQuery = "delete from member2 where mb_id='$id'";
    mysqli_query($con, $deleteQuery);
    echo "<script>window.alert('회원정보가 삭제되었습니다.');</script>";
    echo "<script>location.href = 'login.php';</script>";
    //header('Location: login.php');
}
else{
  echo "<script>window.alert('회원정보가 일치하지 않습니다.');</script>";
  echo "<script>location.href = 'delete_id.php';</script>";
  //header('Location: login.php');
}
?>
