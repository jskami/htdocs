<?php
// 회원가입시 저장버튼을 클릭했을 때 동작!
// 폼에서 입력받은 username, password를 db에 저장할 것이다.
// Pseude Code(수도코드) : 프로그램 처리 과정을 일상의 언어로 적어가는 것을 말한다.
/*
    1. get the value from $_POST     /      $변수 = $_POST[name]; / POST 방식으로 전달된 값을 취한다.
    2. Form validation 진행(공백체크, 잘못된 문자 체크, 해당 id와 db의 id와 일치하는지 등등 확인하는데, 중복 확인은 불가능하다. 아직 DB와 연결을 안했기 때문이지! 우리는 심플하게 생략)
    3. DB에 연결
    4. 중복체크를 위한 질의 구성
    5. 중복체크를 위한 질의 실행
    6.1 중복계정이 있으면 중복메시지 출력 후 회원가입폼으로 이동
    6.2 중복계정이 없으면 다음단계 진행
    7. 질의어(insert 구문)를 구성한다.
    8. 구성된 질의어를 실행시킨다.(MySQL에 질의실행 요청)
    9. login폼 화면으로 이동시킨다.
*/
    // 1.
    $username = $_POST['username'];
    $password = $_POST['password'];

    // 2.
    if(empty($username) || empty($password)) {
        echo("<script>alert('유저명 또는 비밀번호가 공백입니다.');</script>");
        header('Location: step1_RegistForm.php');
    }

    // 3.
    $hostname = 'localhost';
    $user = 'webapp';
    $pass = 'webapp';
    $db = 'webdb';

    $dbconn = mysqli_connect($hostname, $user, $pass, $db);

    // 4.
    $sql = "SELECT * FROM users WHERE username ='". $username ."'";  

    // 5. 중복체크 해서 값이 있다 없다만 확인 하면 된다.
    $resultset = mysqli_query($dbconn, $sql);
    $number = mysqli_num_rows($resultset); // resultset안에 몇개의 레코드가 있는지 숫자로 반환, 값이 있으면 1, 없으면 0..
    
    // 6.1 
    if($number > 0) {
        header('Location: step1_RegistForm.php');
    } else {  // else로 묶으니까 'Location: step1_RegistForm.php'에 머무른다.(이게 정상)
    

    // 6.2 ... 다음 단계로 진행-

    // 7.
    $sql = "INSERT INTO users(username, userpwd) VALUES('". $username . "','" . $password ."')"; //값을 집어 넣을거야 그래서 인서트 인투 쓰는거야

    // 8.
    $result = mysqli_query($dbconn, $sql);

    // 9.
    if($result) {
        header('Location: step1_LoginForm.php');
    }
}
?>