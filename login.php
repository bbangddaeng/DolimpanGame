<?php
session_start();
include("connect.php");
if($_SESSION['id'] == null){
?>

<!DOCTYPE HTML>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src= "//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <title>Login</title>
    <style>
      div {position:relative;}
      .hc{width:300px; left:0; right:0; margin-left:auto; margin-right:auto;}
      .vc{height:0px; top: 0; bottom:0; margin-top:auto; margin-bottom:auto;}
      .button{color:green;}
    </style>
    <!-- <h1 style = "margin:0;">(Test)</h1> -->
  </head>

  <body>
    <p class = "hc vd">
    <img onclick="location.href='login.php'"style="height:100px;left:-100px;position:relative;margin-top:100px;margin-left:auto;margin-right:auto;margin-bottom:auto;position:relative;width:500px;cursor:pointer;"src = "https://dolimpan.s3.ap-northeast-2.amazonaws.com/dolimpan_logo.jpg">
  </img>
</p>
    <div class = "hc vc">
    <h2>

    </h2>
    <script> var chkVal = false; var idChk = false; var pwdChk = false;</script>
      <form action="login_check.php" method="post">

        <!-- 이름 : <input type = "text" name = "name"/><br/> -->

        <input style = "margin-top:0px;margin-bottom:5px;margin-left:5px;white;width:100%;height:40px;"onkeydown="
        if(event.keyCode == 13 ){
          if(!chk()){return false;}
          else{return true;}
        }"
          value = '' id ="id"placeholder="아이디를 입력하세요." type = "text" name = "id"/><br/>

        <hid class ="hid"style = "color:red;font-size:14px;margin-left:5px;display:none;" id="id_error_msg" name="id_error_msg">   아이디를 입력해주세요.</hid>

        <input style = "margin:5px;white;width:100%;height:40px;" onkeydown="
        if(event.keyCode == 13 ){
          if(!chk()){return false;}
          else{return true;}
        }"

          value = '' id = "pwd" placeholder="비밀번호를 입력하세요." type = "password" name = "pwd"/><br/>
        <!-- 이메일 : <input type = "text" name = "email"/><br/> -->

        <hid class = "hid" style = "color:red;font-size:14px;display:none;margin-left:5px;" id="pwd_error_msg" name="pwd_error_msg">  비밀번호를 입력해주세요.</hid>

        <input id = "btn" style = "margin-bottom:0px;cursor:pointer;font-weight:bold;border:#2DB400 solid 3px;background-color:#2DB400;color:white;width:100%;height:45px;margin:5px"
        onkeydown="
        if (event.keyCode == 13 || event.keyCode == 32){
          if(!chk()){return false;}
          else{return true;}
        }
        "
        onclick="if(chk()){return true;}else{return false;}" type = "submit" value = "로그인"/>
      </form>
      <a href = "./make_id.php" style="cursor:pointer;margin-top:0px;margin-left:90px;font-size:12px;">회원가입</a>
      <a href = "./delete_id.php" style="cursor:pointer;margin-top:0px;margin-left:10px;font-size:12px;">회원탈퇴</a>
    </div>

    <script>

      function chk(){
        if(  $('#id').val() != '' && $('#pwd').val() != ''){
          return true;
        }
        else{
          if($('#pwd').val() == '' && $('#id').val() ==''){
            $('#id_error_msg').show();
            $('#pwd_error_msg').hide();
          }
          else if($('#id').val() == ''){
            if($('#pwd').val() != ''){
              $('#pwd_error_msg').hide();
            }
            $('#id_error_msg').show();
            $('#id').focus();
          }
          else if($('#pwd').val() == ''){
            if($('#id').val() != ''){
                $('#id_error_msg').hide();
            }
            $('#pwd_error_msg').show();
            $('#pwd').focus();
          }
          return false;
        }
      }

    </script>
  </body>
</html>

<?php
}
else{
  header('Location: dolimpan.php');
  //exit;
}

?>
<script>
console.log('test');
</script>
