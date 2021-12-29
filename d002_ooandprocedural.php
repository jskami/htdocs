<!--
  Object-Oriented and Procedural interface.
-->
<?php
  require_once 'dbconfig.php';
  //====================
  // MySQLi Procedural  절차적 (올드한 방식)
  //====================
  $mysqli = mysqli_connect($host, $user, $pass, $db);
  $sql = "SELECT 'A world full of  ' AS _msg FROM DUAL";
  $result = mysqli_query($mysqli, $sql);
  $row = mysqli_fetch_assoc($result);
  echo $row['_msg'];

  // MySQLi Object-Oriented   객체지향 (이게 많이 쓰인다.)
  //========================
  $mysqli = new mysqli($host, $user, $pass, $db); //->여기 있는 $변수들은 접근 권한이 있는 사용자의 정보야. 그건 dbconfig.php에 있어
  $sql = "SELECT 'choices to please everybody.  ' AS _msg FROM DUAL";
  $result = $mysqli->query($sql); // 객체참조변수 = 생성한 클래스->query(가져온다-의 의미)($변수);
  $row = $result->fetch_assoc();
  echo $row['_msg'];
?>