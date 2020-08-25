<?php
  include('connect.php');
  session_start();
  if($_SESSION['id'] == null){
    header('Location: login.php');
    exit;
  }
?>

<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src= "//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <title>Change Information</title>
    <style>
      div {position:relative;}
      .hc{width:300px; left:0; right:0; margin-left:auto; margin-right:auto;}
      .vc{height:0px; top: 0; bottom:0; margin-top:auto; margin-bottom:auto;}
      .button{color:green;}
    </style>
    <title>Checking...</title>

  <style>

</style>
  </head>

  <body>
    <div class ="hc vc">
    <h1 style="margin-left:48px;font-color:red;">
      회원 정보 수정
    </h1>

    <form action="change_check.php" method="post">
    <pp style="margin-left:5px;margin-top:10px;margin-bottom:50px;">아이디</pp>
    <input name = "id" id = "id" style = "margin-top:0px;margin-bottom:5px;margin-left:5px;white;width:100%;height:45px;"
    disabled type = "text" value = '' placeholder= "<?php echo $_SESSION['id'];?>"
    onkeydown="
    if(event.keyCode == 13 ){
      if(!chk()){return false;}
      else{if(final_check()){$('#email2').attr('disabled',false);return true;}}
    }
    "/>
    <script>

      temp
    </script>
    <pp style="margin-left:5px;margin-top:100px;">닉네임</pp>
    <input name = "name" id = "name" style = "margin-top:0px;margin-bottom:5px;margin-left:5px;white;width:100%;height:45px;"
    type = "text" value = '<?php echo $_SESSION['name'];?>' placeholder="<?php echo $_SESSION['name'];?>"
    onkeydown="
    if(event.keyCode == 13 ){
      if(!chk()){return false;}
      else{if(final_check()){$('#email2').attr('disabled',false);return true;}}
    }
    "/>

    <hid class = "hid" style = "color:red;font-size:14px;display:none;margin-bottom:10px;margin-left:5px;"
    id="name_error_msg" name="name_error_msg">  이름을 입력해주세요.<br><br></hid>

    <pp style="margin-left:5px;margin-top:10px;">비밀번호 수정</pp>
    <input name = "pwd"id = "pwd"style = "margin-top:0px;margin-bottom:5px;margin-left:5px;white;width:100%;height:45px;"
    type = "password" value = '' placeholder="비밀번호를 입력하세요."
    onkeydown="
      if(event.keyCode == 13 ){
        if(!chk()){return false;}
        else{if(final_check()){$('#email2').attr('disabled',false);return true;}}
      }
    "/>

    <hid class = "hid" style = "display:none;color:red;font-size:14px;margin-bottom:10px;margin-left:5px;"
    id="pwd_error_msg" name="pwd_error_msg">  비밀번호 입력해주세요.<br><br></hid>

    <pp style="margin-left:5px;margin-bottom:10px;">비밀번호 재확인</pp>
    <input name = "pwd2"id = "pwd2"style = "margin-top:0px;margin-bottom:5px;margin-left:5px;width:100%;height:45px;"
    type = "password" value = '' placeholder="비밀번호를 입력하세요."
    onkeydown="
    if(event.keyCode == 13 ){
      if(!chk()){return false;}
      else{if(final_check()){$('#email2').attr('disabled',false);return true;}}
    }
    "/>

    <hid class = "hid" style = "display:none;color:red;font-size:14px;margin-bottom:10px;margin-left:5px;"
    id="pwd_error_msg_2" name="pwd_error_msg_2">  비밀번호를 입력해주세요.<br><br></hid>

    <pp style="margin-left:5px;margin-top:10px;">이메일 수정하기</pp> <input type="checkbox" id = "chkbox" onclick="check_box();"/><br>
    <email id = "email_not_change">
    <input style = "margin-top:0px;margin-bottom:5px;margin-left:5px;margin-right:0;width:100%;height:45px;"
    disabled type = "text" value = '<?php echo $_SESSION['email'];?>' >
    </email>

    <email id = "email_change" style="display:none;">
    <input name = "email" id = "email" style = "margin-top:0px;margin-bottom:5px;margin-left:5px;margin-right:0;white;width:110px;height:45px;"
    type = "text" value = '' placeholder=""
    onkeydown="
    if(event.keyCode == 13 ){
      if(!chk()){return false;}
      else{if(final_check()){return true;}}
    }
    "/>
    <label>@</label>
    <input name = "email2" id = "email2" style = "margin-top:0px;margin-bottom:5px;margin-left:0px;margin-right:0;white;width:75px;height:45px;"
     disabled type = "text" value = "naver.com" placeholder=""
    onkeydown="
    if(event.keyCode == 13 ){
      if(!chk()){return false;}
      else{if(final_check()){$('#email2').attr('disabled',false);return true;}}
    }
    "/>

    <select name = "email_select" id ="email_select" onchange="email_select_func();"style = "margin-top:0px;margin-bottom:0px;margin-left:0px;white;width:77.3px;height:45px;">
      <option value="1" >직접입력</option>
      <option value="naver.com" selected >naver.com</option>
      <option value="hanmail.net">hanmail.net</option>
      <option value="hotmail.com">hotmail.com</option>
      <option value="nate.com">nate.com</option>
      <option value="yahoo.co.kr">yahoo.co.kr</option>
      <option value="empas.com">empas.com</option>
      <option value="dreamwiz.com">dreamwiz.com</option>
      <option value="freechal.com">freechal.com</option>
      <option value="lycos.co.kr">lycos.co.kr</option>
      <option value="korea.com">korea.com</option>
      <option value="gmail.com">gmail.com</option>
      <option value="hanmir.com">hanmir.com</option>
      <option value="paran.com">paran.com</option>
    </select>

    <hid class = "hid" style = "display:none;color:red;font-size:14px;margin-bottom:10px;margin-left:5px;"
    id="email_error_msg" name="email_error_msg">  이메일을 입력해주세요.<br><br></hid>

  </email>
    <button id = "btn" style = "font-size:15px;margin-bottom:0px;cursor:pointer;font-weight:bold;border:#2DB400
    solid 3px;background-color:#2DB400;color:white;width:100%;height:45px;margin:5px"
    class = "button"
    onkeydown="
      if (event.keyCode == 13 || event.keyCode == 32){
        if(!chk()){return false;}
        else{if(final_check()){$('#email2').attr('disabled',false);return true;}}

        if($('#pwd').val() != $('#pwd2').val()){
          alert('비밀번호가 서로 맞지 않습니다.');
          $('#pwd').focus();
          return false;
        }
        if($('#pwd').val().length < 8){
          alert('비밀번호를 최소 8글자 넣어주세요.');
          $('#pwd').focus();
          return false;
        }

      }"
      onclick="
      if(!chk()){return false;}
      else{if(final_check()){$('#email2').attr('disabled',false);return true;}}

      if($('#pwd').val() != $('#pwd2').val()){
        alert('비밀번호가 서로 맞지 않습니다.');
        $('#pwd').focus();
        return false;
      }
      if($('#pwd').val().length < 8){
        alert('비밀번호를 최소 8글자 넣어주세요.');
        $('#pwd').focus();
        return false;
      }

      ">수정하기</button>
  </form>
  <button id = "btn" style = "font-size:15px;margin-bottom:0px;cursor:pointer;font-weight:bold;border:#2DB400
  solid 3px;background-color:#2DB400;color:white;width:100%;height:45px;margin:5px"
  class = "button" onclick="location.href = 'dolimpan.php'">
  취소하기
  </button>

  </div>
  <script>
  function chk(){

    if($('#name').val() == ''){
      hideAll();
      $('#name').focus();
      $('#name_error_msg').show();
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
    if($('#chkbox').prop('checked')){
      if($('#email').val() == ''){
        hideAll();
        $('#email').focus();
        $('#email_error_msg').show();
        return false;
      }
      if($('#email2').val() == ''){
        hideAll();
        $('#email2').focus();
        $('#email_error_msg').show();
        return false;
      }
    }
    return true;
  }

  function hideAll(){
    $('#name_error_msg').hide();
    $('#pwd_error_msg').hide();
    $('#pwd_error_msg_2').hide();
    $('#eamil_error_msg').hide();
  }
  function showAll(){
    $('#name_error_msg').show();
    $('#pwd_error_msg').show();
    $('#pwd_error_msg_2').show();
    $('#email_error_msg').show();
  }

  function final_check(){
    if($('#pwd').val() != $('#pwd2').val()){
      return false;
    }
    if(($('#pwd').val().length < 8) || ($('#pwd2').val().length < 8)){
      return false;
    }
    return true;
  }

  function check_box(){
    if($('#chkbox').prop('checked')){
      $('#email_change').show();
      $('#email_not_change').hide();
    }
    else{
      document.getElementById('email').value ='';
      $('#email_change').hide();
      $('#email_not_change').show();
    }
  }

  function email_select_func(){
    if($('#email_select').val() == '1'){
      $('#email2').attr('disabled',false);
      document.getElementById('email2').value = '';
      $('#email2').focus();
    }
    else{
      document.getElementById('email2').value = $('#email_select').val();
      $('#email2').attr('disabled',true);
    }
  }

  </script>


  </body>

</html>
