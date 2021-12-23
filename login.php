<?php
namespace loginex;

if(count($_POST) > 0) {  // form에 입력이 있을때 처리 진행, 달러 포스트해서 0보다 큰게 넘어오면
    echo "[DBG]폼에 입력된 항목이 있네요?!";  // <-지금 얘가 안나와야 정상이다!
    // 필요한 작업 내용을 pseudo code로 표현해보자
    // 데이터베이스와 연결(get connection)
    require_once '/util/dbutil.php'; // 외부에 만든 파일을 불러온거?
    // DB에 던질 질의를 구성한다. DB는 id와 pw를 만족하는 항목이 있는지 확인
    // 질의가 구성되었다면 질의 실행
    // 실행한 결과의 해당 항목이 있으면 ===> 로그인 성공, 성공페이지로 이동
    // 실행한 결과 해당 항목이 없으면 ==> 로그인 실패, 다시 로그인페이지로 이동
    // 위 내용들은 if안에서 전부 해결 하면 된다.
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>   <!-- 액션은 자기 자신에게 돌아오게 할거야 -->
    <form name="frmUser" method="post" action="<?=$_SERVER['PHP_SELF']?>"> <!--1. 우선적으로 폼부터 만들자! -->
        <label>User Name :</label><input type="text" name="userName" placeholder="please input your user name" /><br>
        <label>Password</label><input type="password" name="password" placeholder="place input your password" /><br>
    <input type="submit" value="Login" />
    </form>  <!-- 폼만 만든거야!, 액션도 없는 상태야 -->
    <!-- 폼 태그는 웹에서 새로고침 하면 양식 다시 제출 확인이 뜨는데 뭐.. 당연한거니까 그러려니 하자 -->







</body>
</html>