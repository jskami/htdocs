<html>
    <body>
        <!-- 페이지를 새로고침 할 때 마다 현재시간 적용 -->
        <?php
            echo date('Y-m-d H:i:s');
        ?>
        <br>
        <!-- 출력방식1. -->
        <?php
            echo 910608-0000000; // 0은 출력이 안되는데?
            echo "안녕!";
        ?>
        <br>
        <!-- 출력방식2. -->
        <?php
            print(10);
            print("문자열 출력 테스트!");  // 사이에 줄 바꿈을 하고 싶은데 어떻게 하지? "<br>";; 적용 안돼..
            print("99 -> 숫자를 문자형으로 출력! 싱글/더블 쿼트 사용");
        ?>
        <!-- 덧셈, 뺄셈, 곱셈, 나눗셈 연산자 -->
        <h1>Number & Arithmetic Operator</h1>
        <h2>1+1</h2>
        <?php
            echo 1 + 1;
        ?>
        <br>
        <h2>2-1</h2>
        <?php
            echo 2 - 1;
        ?>
        <h2>10 * 77</h2>
        <?php
            echo 10 * 77;
        ?>
        <h2>30/5</h2>
        <?php
            echo 30 / 5;
        ?>
        <br>
        <!-- php와 문자열 -->
        <?php
            '안녕 php야!' // 그냥 출력
        ?>
        <br>
        <?php
            echo '안녕, ○○야!' // 에코 출력
        ?>
        <br>
        <?php
            echo "만나서 반가워! '너'는 참 아름다운 사람이야!"; // 위에서 ;을 사용 안했는데도 출력이 가능하다는걸 알았다! 그리고 "" 안에 ''를 써서 그 단어를 문자로 표현하는 것도 가능하다.
        ?>
        <br>
        <br>
        <?php
            echo "그것은 너무나 갑자기 찾아온 \"따스한\" 바람.." // 역슬래시를 사용해서 ""를 문자로 사용
        ?>
        <br>
        <?php
            echo "주어진 시간은 많지 않아, "    ." 나의 가치를 높이는 것에 집중해!"; // "."= 결합 연산자, 나중에 많이 쓰게 될거야!
        ?>
        <br>
        <!-- 문자열 알려주는 strlen 함수 -->
        <h2>String length function</h2>
        <?php
            print("현재 문장이 몇 개의 문자로 이루어졌는지 알려주는 strlen함수");
        ?>
        <br>
        <?php
            echo strlen("현재 문장이 몇 개의 문자로 이루어졌는지 알려주는 strlen함수");
        ?>
        <br>
        <!-- php의 변수 -->
        <h2>php의 변수! $a = 10; / echo $a + 89;</h2>
        <?php
            $a = 10;
            echo $a + 89;
        ?>
        <br>
        <h2>변경해야 하는 "~~~"텍스트에 $name 변수 사용</h2>
        <?php
            $name = "비스코";
            echo "Lorem ipsum dolor sit amet consectetur $name adipisicing elit. Non iure magnam vitae, necessitatibus ea nemo. Fugiat fuga accusamus inventore quae magni eius ut cupiditate, exercitationem corporis sit illo est nulla. Lorem ipsum dolor sit amet consectetur $name adipisicing elit. Repellat architecto est nostrum ipsam quas eaque magnam mollitia eveniet. Aliquam nihil numquam quaerat $name fuga ipsam exercitationem voluptate non rem quo fugit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem laboriosam illo in blanditiis, quibusdam atque culpa quam, fugit veritatis minima esse alias, veniam libero eligendi rem possimus aliquid reprehenderit sed? $name"
        ?>
        <!-- URl parameter.php 실습은 parameter.php 파일에서 진행 / 교재 77p -->
        <!-- 간단히 정리하면, 무수히 많은 사용자를 대상으로 1:1로 페이지를 만들 수는 없으니, 하나의 페이지 안에서 입력값을 받아 출력하는 php 파일을 생성하여 사용자가 정보를 입력하면 그 값을 받아 보여주는 방식이다. -->





    </body>
</html>