<html>
  <title>Checking...</title>
</html>
<?php
  session_start();
  include("connect.php");
  $id = $_POST['id'];
  $pwd = $_POST['pwd'];


  $query = "select * from member2 where mb_id='$id' and mb_password='$pwd'";
  $result = mysqli_query($con, $query);
  $row = mysqli_fetch_array($result);


  if(($id == $row['mb_id']) && ($pwd == $row['mb_password'])){
    $_SESSION['id']=$row['mb_id'];
    $_SESSION['pwd']=$row['mb_password'];
    $_SESSION['name']=$row['mb_name'];
    $_SESSION['email']=$row['mb_email'];
    echo"<script>location.href='login.php';</script>";
  }

  else {
    echo "<script>window.alert('가입하지 않은 아이디이거나, 잘못된 비밀번호입니다.');</script>";
    echo"<script>location.href='login.php';</script>";
    }

  exit;
?>
