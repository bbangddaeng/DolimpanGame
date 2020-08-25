<?php
  include("connect.php");
?>

<html>
<head>
  <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src= "//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <title>회원탈퇴</title>
  <style>
    div {position:relative;}
    .hc{width:300px; left:0; right:0; margin-left:auto; margin-right:auto;}
    .vc{height:0px; top: 0; bottom:0; margin-top:auto; margin-bottom:auto;}
    .button{color:green;}
  </style>

</head>

<body>
  <div style="margin-top:0px;"class = "hc vc">
  <h2>

  </h2>
  <script> var chkVal = false; var idChk = false; var pwdChk = false;</script>
  <img onclick="location.href='login.php'"style="margin-bottom:30px;margin-top:00px;margin-left:3px;position:relative;width:100%;cursor:pointer;"src = "https://steamuserimages-a.akamaihd.net/ugc/776222744418079506/6D60F72669D5296A202CCB9003CB5E62AF63E680/">
  </img>
    <form action="delete_check.php" method="post">

      <!-- 이름 : <input type = "text" name = "name"/><br/> -->

      <input style = "margin-top:0px;margin-bottom:5px;margin-left:5px;white;width:100%;height:40px;"
      onkeydown="
      if(event.keyCode == 13 ){
        if(!chk()){return false;}
        else{alert('pass');return true;}
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

      <input style = "margin:5px;white;width:100%;height:40px;" onkeydown="
      if(event.keyCode == 13 ){
        if(!chk()){return false;}
        else{return true;}
      }"

        value = '' id = "pwd2" placeholder="비밀번호를 입력하세요." type = "password" name = "pwd2"/><br/>

      <hid class = "hid" style = "display:none;color:red;font-size:14px;margin-bottom:10px;margin-left:5px;"
      id="pwd_error_msg_2" name="pwd_error_msg_2">  비밀번호를 입력해주세요.<br><br></hid>

      <input class = "button"id = "btn" style = "margin-bottom:0px;cursor:pointer;font-weight:bold;border:#2DB400 solid 3px;background-color:#2DB400;color:white;width:100%;height:45px;margin:5px"
      onkeydown="
      if (event.keyCode == 13 || event.keyCode == 32){
        if(!chk()){return false;}
        else{ return true;}
      }
      "
      onclick="if(chk()){return true;}else{return false;}" type = "submit" value = "탈퇴하기"/>
    </form>
  </div>

  <script>

    function chk(){

      if($('#id').val() == ''){
        hideAll();
        $('#id').focus();
        $('#id_error_msg').show();
        return false;
      }
      if($('#pwd').val() == ''){
        hideAll();
        $('#pwd').focus();
        $('#pwd_error_msg').show();
        return false;
      }
      if($('#pwd2').val() == ''){
        hideAll();
        $('#pwd2').focus();
        $('#pwd_error_msg_2').show();
        return false;
      }
      if($('#pwd2').val() != $('#pwd').val()){
        alert('비밀번호를 다시 확인해주세요.');
        hideAll();
        $('#pwd').focus();
        $('#pwd_error_msg_1').show();
        return false;
      }
      return true;
    }

    function hideAll(){
      $('#id_error_msg').hide();
      $('#pwd_error_msg').hide();
      $('#pwd_error_msg_2').hide();
    }

  </script>
</body>

</html>
