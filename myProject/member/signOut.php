<?php
  include "../include/session.php";
  echo $_SESSION["ses_userid"]."로그아웃 합니다.";
  unset($_SESSION["ses_userid"]);
  if ($_SESSION['ses_userid'] == null) {
    echo "로그아웃 완료";
  }
  ?>
