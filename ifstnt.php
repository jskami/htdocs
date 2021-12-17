<!-- 기본 로직 시작 -->
<?php
if(0) {

}
else {

}
?>
<!-- 기본 로직 끝 -->

<?php      // 교재 112p. 조건문의 형식 (선생님)
$LOGIN = false;
$userName = "둔둔이";    
    if($LOGIN) {
?>
    <h3><?=$userName?>님이 로그인 하였습니다.</h3>
<?php    
    } // if($login)이 true인 경우 끝
    else { // if ($login)이 false인 경우 시작
?>
    <h3>LOGIN이 필요합니다.</h3>
<?php    
    } // if($login)이 false인 경우 끝
?>

<!-- 교재 112p 조건문의 형식~ 연습 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <!-- conditional 파일 생성 -->
    <h1>Conditional</h1>
    <?php
        echo '1<br>';
        echo '2<br>';
        echo '3<br>';
    ?>
    <!-- if 조건문(true일 때) -->
    <h2>if</h2>
    <?php
        echo '1<br>';
        if(true) {
            echo '2<br>';
        }
        echo '3<br>';
    ?>
    <!-- if 조건문(false일 때) -->
    <h2>if</h2>
    <?php
        echo '1<br>';
        if(false) {
            echo '2<br>';
        }
        echo '3<br>';
    ?>
    <!-- if/else 조건문 -->
    <h2>if/else</h2>
    <?php
        echo '1<br>';
        if(true) {
            echo '2-1<br>';
        } else {
            echo '2-2<br>';
        }
        echo '3<br>';
    ?>
    <!-- 조건문 활용 : WEB에 대한 링크 추가 / 교재117p -->
    <h1><a href="index.php">WEB</a></h1>

    <!-- id 값에 따라 제목 출력(의사코드) -->
    <h2>
        <?php
            // 만약에 id 값이 있다면
            echo $_GET['id'];
            // 없다면
            echo "Welcome";
        ?>
    </h2>
    <!-- id 값에 따라 제목 출력(진짜코드) / 교재118p -->
    <h2>
        <?php
            if($_GET['id'] = '둔둔이') {
                echo $_GET['id'];
            } else {
                echo "Welcome 현재 id값 부여하지 않아서 이걸로 대신 출력합시다!";
            }
        ?>
    </h2>
    <?php
        echo file_get_contents("data/".$_GET['id']);
    ?>
    <!-- isset()함수 이용해 조건문 작성 / 교재 120p -->
    <h2>
        <?php
            if(isset($_GET['id'])) {
                echo $_GET['id'];
            } else {
                echo "Welcome";
            }
        ?>
    </h2>
    <?php
        echo file_get_contents("data/".$_GET['id']);
    ?>
    <!-- 파일을 가져오는 부분도 if문으로 처리 -->
    <h2>
        <?php
            if(isset($_GET['id'])) {
                echo $_GET['id'];
            } else {
                echo "여기는 크집사네 둔둔이";
            }
        ?>
    </h2>
    <?php
        if(isset($_GET['id'])) {
            echo file_get_contents("data/".$_GET['id']);
        } else {
            echo "Hello, IT Edu!!";
        }
    ?>

    <!-- 반복문의 예고 / 교재 124p -->
    <!-- 자동으로 목록 만들기 (의사코드) -->
    <h1><a href="index.php">WEB</a></h1>
    <ol>
        <?php
            //data 디렉터리에 있는 파일의 목록을 가져오세요. 둔둔이님
            //그 파일의 목록 하나하나를 <li>와 <a> 태그를 이용해 글 목록을 만드세요.
        ?>
    </ol>
    
    <!-- 자동으로 목록 만들기 (진짜코드) -->
    <h1><a href="index.php">이거 클릭하면 인덱스 page로 이동!</a></h1>
    <h1><a href="test.php">이거 클릭하면 테스트 page로 이동!</a></h1>
    <ol>
        <?php
            $list = scandir('data');
            $i = 0;
            while($i < count($list)) {
                if($list[$i] != '.') {
                    if($list[$i] != '..') {
                        ?>
                        <li><a href="ifstnt.php?id=<?=$list[$i]?>"><?=$list[$i]?></a></li>
                        <?php
                    }
                }
                $i = $i + 1;
            }
        ?>
    </ol>

</body>
</html>