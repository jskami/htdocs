<?php  //이제 사용자 아이디에서 $username을 끌고오기 위해서 php코드를 작성할거야!
    // DB 연결 준비
    require './adbconfig.php';  // '/~~.php'에서 슬래시를 해버리면 localhost 바로 앞에서 찾아버리기 때문에, 현재 내가 있는 지점을 './~~php'처럼 점슬래시를 써야 한다. './는 현재 내가 있는 곳을 기준으로'의 의미이다.
     // create connection
    $conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

    // check connection : 연결 확인, 오류가 있으면 메시지 출력 후 프로세스 종료
    if($conn->connect_error) {
        echo outmsg(DBCONN_FAIL);
        die("연결실패 :".$conn->connect_error);
    }else {
        if(DBG) echo outmsg(DBCONN_SUCCESS);
    }
    // 수정할 레코드의 id값을 받아온다.
    $id = $_GET['id'];
    // 해당 id로 데이터를 검색하는 질의문 구성
    $sql = "SELECT * FROM users WHERE id = ".$id;  //  = ".$id.";";라고 써도 된다. ;을 붙여주고 싶다면 이렇게 사용하고.. 아니어도 상관 없어 
    // 해당 질의문 실행하여 결과 가져오기
    $result = $conn->query($sql);
    // 결과셋을 한 개의 행으로 처리하고, 필요로 하는 각 칼럼의 값을 얻어온다.
    if($result->num_rows > 0) {
        $row = $result->fetch_array();
        $username = $row['username'];
        $cellphone = $row['cellphone'];
        $email = $row['email'];
    }else{
        echo outmsg(INVALID_USER);  // 웬만해선 여기까지 오지 않는다.
    }
    // 다 만들었고 이녀석들을 통해 DB에서 데이터를 끌고와서 밑에 html코드에 넣어서 뿌려주는거야!
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>사용자 정보 수정</h1>
    <form action="oo_user_updateprocess.php" method="POST">
    <input type="hidden" name="id" value="<?=$id?>"/> <!-- 타입히든 : 값을 숨겨서 넣는거야 -->
    <label>사용자 아이디 : </label><input type="text" name="username" value="<?=$username?>" readonly /><br>
    <label>비밀번호 : </label><input type="password" name="passwd" /><br><a href="">비밀번호수정</a>
    <label>비밀번호(확인) : </label><input type="password" name="cpasswd" /><br>
    <label>전화번호 : </label><input type="text" name="cellphone" value="<?=$cellphone?>" required /><br>
    <label>E-Mail : </label><input type="text" name="email" value="<?=$email?>" required /><br>
    <br>
    <input type=submit value="저장">
    </form>
</body>
</html>