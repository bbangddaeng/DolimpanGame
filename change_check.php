<?php
  include('connect.php');
  session_start();
  if($_SESSION['id'] == null){
    header('Location: login.php');
    exit;
  }

  $name = $_POST['name'];
  $pwd = $_POST['pwd'];
  $id = $_SESSION['id'];

  $email = $_POST['email'];
  $email2 = $_POST['email2'];
  $final_email ='';
  $final_email = $email.'@'.$email2;

  if($email != ''){
    $email_select = "select * from member2 where mb_email = '$final_email';";
    $result = mysqli_query($con, $email_select);
    $row = mysqli_fetch_array($result);
    if($final_email == $row['mb_email']){
      echo "<script>window.alert('이미 등록되어있는 이메일입니다.');</script>";
      echo "<script>location.href='change.php';</script>";
      exit;
    }

    $email_sql = "update member2 set mb_email = '$final_email' where mb_id = '$id';";
    mysqli_query($con, $email_sql);
    $_SESSION['email'] = $final_email;
  }

  $sql = "update member2 set mb_name = '$name', mb_password = '$pwd' where mb_id = '$id';";
  if(mysqli_query($con, $sql)){
    "수정 성공";
  }
  else{
    //echo"수정 실패";
  }

  $_SESSION['pwd']= $pwd;
  $_SESSION['name']=$name;

  echo "<script>window.alert('회원정보 수정 성공!');</script>";
  echo "<script>location.href='dolimpan.php';</script>";
  exit;
?>

<html>
<head>
  <title>
    Checking...
  </title>
  </head>

<body>

</body>
</html>
