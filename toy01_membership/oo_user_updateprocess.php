<!-- 
  파일명 : oo_user_regist_updateprocess.php
  최초작업자 : swcodingschool
  최초작성일자 : 2021-12-28
  업데이트일자 : 2021-12-28
  
  기능: 
  oo_user_update.php 사용자 정보 수정 화면에서 입력된 값을 받아, users 테이블에 사용자 수정된 데이터를 업데이트 한다.
-->

<?php
  // db연결 준비
  require "./adbconfig.php";

  // 데이터베이스 작업 전, 회원정보 수정화면으로 부터 값을 전달 받고
  $id = $_POST['id'];
  $username = $_POST['username'];
  $cellphone = $_POST['cellphone'];
  $email = $_POST['email'];


  // create connection
  $conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

  // check connection : 연결 확인, 오류가 있으면 메시지 출력 후 프로세스 종료
  if($conn->connect_error) {
    echo outmsg(DBCONN_FAIL);
    die("연결실패 :".$conn->connect_error);
  }else {
    if(DBG) echo outmsg(DBCONN_SUCCESS);
  }
  
    // 입력 처리를 위한 prepared sql 구성 및 bind
    $stmt = $conn->prepare("UPDATE users SET cellphone = ?, email = ? WHERE id = ?");
    $stmt->bind_param("sss", $cellphone, $email, $id); //id가 ssi도 되고 sss도 되는데 이유가 뭘까? DB내의 필드타입과 일치 시켜야 하는게 맞다.
    $stmt->execute();
    
    
  // 데이터베이스 연결 인터페이스 리소스를 반납한다.
  $conn->close();

  // 프로세스 플로우를 인덱스 페이지로 돌려준다.
  header('Location: oo_user_detailview.php?id='.$id);
?>