<!-- 
The mysqli extension 은 이중 인터페이스 제공
하나는 procedural 인터페이스이고 
다른 하나는 object-oriented programming paradigm이다.

예전 mysql extension 사용자는 procedural interface 선호
procedural interface 는 이전 mysql extension과 유사
대부분의 경우 함수이름은 접두사만 다르다.

일부 mysqli 함수는 연결 핸들을 첫 번째 인수로 사용하는 반면 
이전 mysql 인터페이스의 일치하는 함수는 connection handle을 
선택적 마지막 인수로 사용.
-->
<!--
  Easy migration from the old mysql extension
-->
<?php
  require_once 'dbconfig.php';

  $mysqli = mysqli_connect($host, $user, $pass, $db);
  $sql = "SELECT 'Please do not use the deprecated mysql extension for new development. ' AS _msg FROM DUAL";  //DUAL은 실재하지 않는 MySQL에서 제공하는 가상의 테이블이다. 간단한 메시지를 출력하고 DB에서 테스트용도로 사용한다. 속성명도 없으니까 _msg라고 가상의 이름을 부여, 
  $result = mysqli_query($mysqli, $sql);
  $row = mysqli_fetch_assoc($result);
  echo $row['_msg'];
  echo '<br>';

  // ************************
  // 아래 코드는 더 이상 사용되지 않는 mysql_connect()
  // $mysql = mysql_connect($host, $user, $pass);
  // mysql_select_db($db);
  // $sql = "SELECT 'Use the mysqli extension instead. ' AS _msg FROM DUAL";
  // $result = mysql_query("", $mysql);
  // $row = mysql_fetch_asso($result);
  // echo $row['_msg'];

?>
