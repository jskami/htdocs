<!-- 함수의 활용 / 교재 173p -->

<!-- 제목을 출력하는 코드를 <title>태그에 붙여넣기 -->
<?php
    function print_title() {        
        if(isset($_GET['id'])) {
            echo $_GET['id'];
        } else {
            echo "안녕!";
        }
    }  // 지금 만든 함수를 html의 맨 위에 위치시킨다(정리할 겸, 가독성도 좋게 하기 위해)
?>
        <!-- 현재 타이틀 태그와 바디 태그에서 똑같은 함수를 코딩한 것이다. // 그래서 이 코드들을 하나의 함수로 묶어 보자! -->







<html>
    <head>
        <meta charset="utf-8">
        <title>
            <?php
                print_title(); //위에서 p_t에 대한 함수를 만들었기 때문에 그 함수를 호출한다는 의미
            ?>
        </title>
    </head>
    <body>
        <?php
            if($_GET['id'] = '둔둔이의 php Web') {
                echo $_GET['id'];
            } else {
                echo "Welcome!";
            }
            ?>
    
        <h1><a href="function.php">위에 출력된 것은 title / 아래에 출력 된 것은 body</a></h1>
        <ol>
            <li><a href="#">여기는 네이버</a></li>
            <li><a href="#">여기는 구글</a></li>
            <li><a href="#">여기는 유튜브</a></li>
            <li><a href="#">여기는 청주</a></li>
            <li><a href="#">여기는 학원</a></li>
        </ol>
        <h1>php 연습중이야</h1>
        <h4>
            <?php
                print_title();
            ?>
        </h4>


    </body>
</html>