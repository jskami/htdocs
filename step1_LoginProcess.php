<?php
// Pseude Code(수도코드) : 프로그램 처리 과정을 일상의 언어로 적어가는 것을 말한다.
/*
    1. get the value from $_POST     /      $변수 = $_POST[name]; / POST 방식으로 전달된 값을 취한다.
    2. Form validation 진행 (여기서는 전달된 값이 공백이면 재입력 요청)
    3. DB 연결하고
    4. 질의어를 구성한다.
    5. 구성된 질의어를 실행시킨다.(MySQL에 질의실행 요청), 실행 결과를 돌려받는다.
    6.1. 결과를 확인하고... 사용자의 id,pw가 있다면(레코드가 존재하면) 로그인 성공, page로 이동
    6.2.                                                     존재하지 않으면 로그인 실패, Form화면 이동
*/
    // 1.
    $username = $_POST['username']; //앞에 유저네임은 php에서 쓰는 이름이고 뒤에 유저네임은 폼 화면에서 넘어온 이름이다.
    $password = $_POST['password']; //앞에 패스워드은 php에서 쓰는 이름이고 뒤에 패스워드은 폼 화면에서 넘어온 이름이다.

    // 2.
    // 사용자명 또는 비밀번호 중 하나라도 입력하지 않았으면
    // 다시 로그인폼화면으로 돌려보낸다.
    if(empty($username) || empty($password)) {  // null은 값이 없는 상태이고 empty는 변수는 있는데 비어있는 값이 있는것이다.
        echo "<script>alert('사용자명 또는 비밀번호를 확인해주세요.');</script>";
        header('Location: step1_LoginForm.php');
    }

    // 3. 데이터베이스 연결
    $host = 'localhost';
    $user = 'webapp';
    $pass = 'webapp'; 
    $db = 'webdb';
    // $dbconn = mysqli_connect(호스트명, DB이름, 사용자명, 비밀번호, 데이터베이스);
    $dbconn = mysqli_connect($host, $user, $pass, $db);
    if(is_null($dbconn)){  //dbconn이 null이라면
        echo "데이터베이스 연결에 문제가 생겼습니다.";
    }

    // 4. 질의어(sql) 구성
    $sql = "SELECT userpwd FROM users WHERE username='".$username."'";
    
    // 5. 실행하고 결과 돌려받기
    $resultset = mysqli_query($dbconn, $sql);

    while($row = mysqli_fetch_array($resultset)) {  // $resultset의 여러개를 물어오겠다!-의 의미
        // 6.
        if( $password == $row['userpwd']) {  // 사용자가 입력한 $password 가 db안에 있는 userpwd와 일치하다면-의 의미
            header('Location: step1_LoginSuccess.php'); // 로그인에 성공하면 성공php로 이동
        } else {
            echo '비밀번호가 틀렸습니다!';  // alert를 쓰는게 좋다. 지금은 자바스크립트를 쓰면 복잡하니까 에코로 일단 대체!
            header('Location: step1_LoginForm.php');  //틀렸다면 다시 로그인 폼으로 이동
        }
    }
?>