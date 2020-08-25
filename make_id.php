<?php
  session_start();
  include('connect.php');
?>


<html>
  <head>
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src= "//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <title>회원가입</title>
    <style>
      div {position:relative;}
      .hc{width:300px; left:0; right:0; margin-left:auto; margin-right:auto;}
      .vc{height:0px; top: 0; bottom:0; margin-top:auto; margin-bottom:auto;}
      .button{color:green;}

    </style>
    <!-- <h1 style = "margin:0;">(Test)</h1> -->

  </head>


  <body>
    <div style = "margin-top:0px;"class = "hc vc">
      <h2>
        <img onclick="location.href='login.php'"style="margin-bottom:30px;margin-top:0px;margin-left:3px;position:relative;width:100%;cursor:pointer;"src = "https://dolimpan.s3.ap-northeast-2.amazonaws.com/%EC%8A%AC%ED%94%88%EA%B0%9C%EA%B5%AC%EB%A6%AC/1548256753.gif">
      </img>
      </h2>
    <form action ="submit_check.php" method="post">
      <pp style="margin-left:5px;margin-top:100px;">닉네임</pp>
      <input name = "name" id = "name" style = "margin-top:0px;margin-bottom:5px;margin-left:5px;white;width:100%;height:45px;"
      type = "text" value = '' placeholder="닉네임을 입력하세요."
      onkeydown="
      if(event.keyCode == 13 ){
        if(!chk()){return false;}
        else{if(final_check()){$('#email2').attr('disabled',false);return true;}}
      }
      "/>
      <hid class = "hid" style = "color:red;font-size:14px;display:none;margin-bottom:10px;margin-left:5px;"
      id="name_error_msg" name="name_error_msg">  이름을 입력해주세요.<br><br></hid>


      <pp style="margin-left:5px;margin-top:10px;">아이디</pp>
      <input name = "id" id = "id" style = "margin-top:0px;margin-bottom:5px;margin-left:5px;white;width:100%;height:45px;"
      type = "text" value = '' placeholder="아이디를 입력하세요."
      onkeydown="
      if(event.keyCode == 13 ){
        if(!chk()){return false;}
        else{if(final_check()){$('#email2').attr('disabled',false);return true;}}
      }
      "/>
      <hid class = "hid" style = "display:none;color:red;font-size:14px;margin-bottom:10px;margin-left:5px;"
      id="id_error_msg" name="id_error_msg">  아이디 입력해주세요.<br><br></hid>

      <pp style="margin-left:5px;margin-top:10px;">비밀번호</pp>
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
      <input name = "pwd2"id = "pwd2"style = "margin-top:0px;margin-bottom:5px;margin-left:5px;white;width:100%;height:45px;"
      type = "password" value = '' placeholder="비밀번호를 입력하세요."
      onkeydown="
      if(event.keyCode == 13 ){
        if(!chk()){return false;}
        else{if(final_check()){$('#email2').attr('disabled',false);return true;}}
      }
      "/>

      <hid class = "hid" style = "display:none;color:red;font-size:14px;margin-bottom:10px;margin-left:5px;"
      id="pwd_error_msg_2" name="pwd_error_msg_2">  비밀번호를 입력해주세요.<br><br></hid>

      <pp style="margin-left:5px;margin-top:10px;">이메일</pp><br>
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

        ">가입하기</button>
    </form>
  </div>

  <script>
    function chk(){
      if($('#name').val() == ''){
        hideAll();
        $('#name').focus();
        $('#name_error_msg').show();
        return false;
      }
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
      return true;
    }

    function hideAll(){
      $('#name_error_msg').hide();
      $('#id_error_msg').hide();
      $('#pwd_error_msg').hide();
      $('#pwd_error_msg_2').hide();
      $('#email_error_msg').hide();
    }
    function showAll(){
      $('#name_error_msg').show();
      $('#id_error_msg').show();
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
