<!-- URl parameter.php 실습 / 교재 77p -->
<html lang="en">
    <head>
        <meta charset="UTF-8">

    </head>
    <body>
        안녕하세요. 종수님 -에서 종수를 빼고 입력 값을 받는 함수로 대체해보자
        <br>
        <br>
        안녕하세요. <?php echo $_GET['name']; ?>님
        <br>
        <br>
        안녕하세요. <?php echo $_GET['title']; ?>님 
        <br>
        <br>
        echo $_GET['name']; 함수를 설정하고, 페이지 주소창에서 http://localhost/parameter.php?name=이름 <-이렇게 접속하면 입력값을 받아서 출력이 된다. 같은 원리로 title=내용 작성하면 타이틀을 보여준다.
        <br>
        <br>
        <!-- http://localhost/parameter.php?name=이름&address=주소명 / 두 개의 입력 값 받기 -->
        안녕하세요. <?php echo $_GET['address']; ?>에 사시는 <?php echo $_GET['name']; ?>님
        <br>
        <br>
        <!-- 글 목록 만들기 -->
        <h1>WEB</h1>
        <ol>
            <li><a href="index.php?id=html">HTML</a></li>
            <li><a href="index.php?id=css">CSS</a></li>
            <li><a href="index.php?id=dd">dd</a></li>
        </ol> <!-- id를 따로 부여했지만 링크는 모두 동일해서 클릭해도 같은 페이지로 이동될 뿐이야! -->
        <br>
        <!-- URL의 id 값에 따라 페이지의 제목 바꾸기 -->
        <h2>
            <?php
                echo $_GET['id'];  // !눈에 보이는 변화를 못봐서 재확인 필요!
            ?>
        </h2>








    </body>
</html>