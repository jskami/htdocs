<?php
namespace loginex;  // 파일은 열기로 되어 있지만 여기서 만든 것들은 저~기 login.php로 이동한다.

use mysqli;

$HOSTNAME = 'localhost';  // 상수 선언중..
$USERNAME = 'webapp';  // get connection 하기 위해 작성하는 것이다. 현재 define(정의)한 상태이다.
$PASSWORD = 'webapp';
$DATABASENAME = 'webdb';
// create a connection DB커넥션 설정
$dbconn = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASENAME); 

if($dbconn) {  // 연결이 되었는지 체크해보자.
    echo "db연결이 성공하였습니다.";
} else {
    die("db연결에 실패하였습니다.". mysqli_connect_error());
}

?>