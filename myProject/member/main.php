<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>메인페이지</title>
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/mySignInForm.js"></script>
    <link rel="stylesheet" href="../css/mySignInForm.css">
  </head>
  <body>
    <div id="wrap">
      <div id="container">
        <h1 class = "title">안녕하세요</h1>
        <form name="signIn" action="./signIn.php" method="post" onsubmit="return checkSubmit()">
          <div class="line">
            <p>아이디</p>
            <div class="inputArea">
              <input type="text" name="memberId" class="memberId">
            </div>
          </div>
          <div class="line">
            <p>비밀번호</p>
            <div class="inputArea">
              <input type="password" name="memberPw" class="memberPw">
            </div>
          </div>
          <div class="line">
            <input type="submit" value="로그인" class="submit">
          </div>
        </form>
        <h1 class="title"><a href="./signUpForm.php">회원가입</h1>
      </div>
    </div>
  </body>
</html>
