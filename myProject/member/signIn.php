<?php
  include "../include/session.php";
  include "../include/dbConnect.php";

  $memberId = $_POST['memberId'];
  $memberPw = md5($memberPw = $_POST['memberPw']); //post로 값을 받아오고 md5로 암호화

  $sql = "SELECT * FROM member WHERE memberId = '{$memberId}' AND password = '{$memberPw}'";
  $res = $dbConnect->query($sql);
  $row = $res->fetch_array(MYSQLI_ASSOC);
   if ($row != null) {
       $_SESSION['ses_userid'] = $row['memberId'];
       echo $_SESSION['ses_userid'].'님 안녕하세요';
       echo '<a href="./signOut.php">로그아웃 하기</a>';
   }

   if ($row == null) {
     $sc = "로그인 실패 아이디와 비밀번호가 일치하지 않습니다.";
       echo "<script> alert ('{$sc}');</script>";
       echo "<script>location.href = ../member/main.php";
   }
  ?>
