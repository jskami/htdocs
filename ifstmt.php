<!-- 12 조건문의 형식 pg112 -->

<?php
$LOGIN = false;
$userName = "홍길동";
  if ($LOGIN) {
?>

<h3><?=$userName?>님이 로그인하였습니다.</h3>
<!--short echo tag  -->

<?php
// if($login)이 true인 경우 끝
  } else { //if($login)이 false인 경우 시작 
?>
<h3>LOGIN이 필요합니다</h3>
<?php
  } //if($login)이 flase인 경우 끝
?>

