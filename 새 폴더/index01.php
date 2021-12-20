<?php
  // phpinfo();    // 주석은 <?php 안에서만 가능하다.
  echo date('Y-m-d H:i:s');
  echo '<br>';
  $a = 100.12; 
  var_dump($a);
  echo '<br>'; // 변수의 정보(type)를 덤프 해준다.
  $a = "korea";
  var_dump($a);
  echo '<br>';

  echo "안녕하세요!" . $_GET['name'] . "님?!"; // 76~86p 참고
  echo $_GET['address'] . "에 사시는군요." ;

?>

<!-- index 파일이 기본 localhost 이기 때문에 다른 php파일을 불러오려면 파일 명을 붙여서 띄운다. -->

<!DOCTYPE html>
<html>
    <body>
        <h1>variable</h1>
        <?php
            echo 1 + 1;          // 교재 70p. 1 + 1;
        ?>
        <br>

        <?php
        $a = 1;
        echo $a + 10;    // 교재 70p. 변수를 이용한 덧셈
        ?>

        <br>
        <h1>$a를 10으로 지정 $b를 100으로 지정</h1>
        <?php
        $a = 10;
        $b = 100;
        echo $a + $b;    // 교재 71p $a를 10으로 지정을 응용해 보았다.
        ?>
        <br>
        <h1>샘플 텍스트를 PHP코드로 만들기</h1>
        <?php
        echo "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis similique enim est, architecto consequatur quisquam voluptatem quae aliquid incidunt nam, unde deleniti fuga, adipisci impedit necessitatibus accusantium nobis asperiores commodi."  // 
        ?>
        <br>
        <h1>변경해야 하는 학원 텍스트에 $name 변수 사용.</h1>
        <?php
        $name = "학원";   // 교재 73p 
        echo "내가 다니는 ".$name."은 집에서 아주 가깝다. ".$name."까지 걸어가면 10분 정도 소요된다. 컴퓨터 프로그래밍 교육을 진행중인 IT".$name."이다. 우리 ".$name."은 선생님도, 직원분들도 클래스 멤버들도 너무너무 좋은 사람들이다. 남은 교육 기간 동안 열심히 할 것이다."
        ?>
        <br>
        <h1>name, address 두 개의 입력 값 받기</h1> <!-- 교재 80p -->
        <?php echo $_GET['address']; ?>에 살고있는 <?php echo $_GET['name']; ?>님
        <br>
        <h1>Comparison Operators & Boolen data type</h1>
        <?php
            var_dump(11);  // var_dump()는 입력한 값과 타입까지 알려준다. 값 11은 int형 / 교재 107p
        
            var_dump('11');  // 숫자 11을 문자형으로 나타낼 수 있을까? 가능!

        ?>
        <br>
        <br>
        <h1></h1>
        
    </body>
</html>