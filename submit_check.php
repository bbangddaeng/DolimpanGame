<html>
  <title>Checking...</title>
</html>
<?php
  session_start();
  include('connect.php');
  $id = $_POST['id'];
  $email = $_POST['email'];
  $name = $_POST['name'];
  $pwd = $_POST['pwd'];
  $email2 = $_POST['email2'];
  $final_email ='';

  $final_email = $email.'@'.$email2;

  // $str = "<script>";
  // $str .= "alert('{$email2}');";
  // $str .= "</script>";
  // echo("$str");

  $query = "select * from member2 where mb_id='$id' or mb_email='$final_email'";
  $result = mysqli_query($con, $query);
  $row = mysqli_fetch_array($result);

  if($id == ''){
    echo "<script>location.href='make_id.php';</script>";
  }
  else if(!(preg_match('/[0-9]/', $id) && preg_match('/[a-z]/i', $id))){
    echo "<script>window.alert('아이디에 6~10자의 숫자와 영문자를 모두 포함해야합니다.1');</script>";
    echo "<script>location.href='make_id.php';</script>";
    exit;
  }
  else if((strlen($id) <6) || (strlen($id) >10)){
    echo "<script>window.alert('아이디에 6~10자의 숫자와 영문자를 모두 포함해야합니다.2');</script>";
    echo "<script>location.href='make_id.php';</script>";
    exit;
  }

  if($id == $row['mb_id']){
    echo "<script>window.alert('이미 등록되어있는 아이디입니다.');</script>";
    echo "<script>location.href='make_id.php';</script>";
    exit;
  }
  else if($final_email == $row['mb_email']){
    echo "<script>window.alert('이미 등록되어있는 이메일입니다.');</script>";
    echo "<script>location.href='make_id.php';</script>";
    exit;
  }
  else{
    //$pwd = md5($_POST['pwd']); 비밀번호 암호화
    $sql = "insert into member2 values('1','$id','$pwd','$name','$final_email','');";
    $con->query($sql);
    echo "<script>window.alert('회원가입 성공!');</script>";
    echo "<script>location.href='login.php';</script>";
    exit;
  }
?>
