<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>폼 구성할거야! 1번 방식으로 가자!</title>
</head>
<body>
    <h3>로그인</h3>
    <form action="step1_LoginProcess.php" method="POST">
        <label>USER NAME : </label><input type="text" name="username" placeholder="사용자명을 입력해주세요" /><br>
        <label>Password : </label><input type="text" name="password" placeholder="비밀번호를 입력해주세요" /><br>
        <input type="submit" value="로그인">
        <a href="step1_RegistForm.php">회원가입</a>  <!-- 회원가입 폼을 만들거야! -->
    </form>
</body>
</html>