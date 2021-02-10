<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>회원가입</title>
    <script type="text/javascript" scr=jquery.js></script>
    <script type="text/javascript" src="../member/mySignUpForm.js"></script>
    <link rel="stylesheet" href="../css/mySignUpForm.css">
  </head>
  <body>
    <div id="wrap">
      <div id="container">
        <h1 class = "title">회원가입</h1>
        <form name="signUp" action="../member/memberSave.php" method="post" onsubmit="return checkSubmit()">
          <div class="line">
            <p>아이디</p>
            <div class="inputArea">
              <input type="text" name="memberId" class="memberId">
            </div>
            <div class="memberCheck">중복확인</div>
            <input type="button" value="중복확인" onclick="memberIdCheck()">
            <div class="memberIdComment comment"></div>
            <div class="line">
                <p>이름</p>
                <div class="inputArea">
                    <input type="text" name="memberName" class="memberName">
                </div>
            </div>
            <div class="line">
                <p>비밀번호</p>
                <div class="inputArea">
                    <input type="password" name="memberPw" class="memberPw">
                </div>
            </div>
            <div class="line">
                <p>비밀번호 확인</p>
                <div class="inputArea">
                    <input type="password" name="memberPw2" class="memberPw2">
                    <div class="memberPw2Comment comment"></div>
                </div>
            </div>
            <div class="line">
                <p>닉네임</p>
                <div class="inputArea">
                    <input type="text" name="memberNickName" class="memberNickName">
                    <div class="memberNickNameComment comment"></div>
                </div>
            </div>
            <div class="line">
                <p>이메일</p>
                <div class="inputArea">
                    <input type="text" name="memberEmailAddress" class="memberEmailAddress">
                    <div class="memberEmailAddressComment comment"></div>
                </div>
            </div>
            <div class="line">
                <p>생일</p>
                <div class="inputArea">
                    <input type="text" name="memberBirthDay" class="memberBirthDay">
                    <div class="memberBirthDayComment comment"></div>
                </div>
            </div>
            <div class="line">
                <input type="submit" value="가입하기" class="submit">
            </div>
          </div>
        </form>
        <div class="formCheck">
            <input type="hidden" name="idCheck" class="idCheck">
            <input type="hidden" name="pw2Check" class="pwCheck2">
            <input type="hidden" name="eMailCheck" class="eMailCheck">
        </div>
      </div>
    </div>
  </body>
</html>
