<!-- 함수의 사용 / 교재 87p -->
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>function</h1>
        <?php
            $str = "시간은 기다려 주지 않아, 그리고 인생에 지름길은 없어.. 그래서 난 최선을 다해 살아갈거야, 최선을 다해 사랑할거야, 최선을 다해 노력할거야. 인생의 후회가 남지 않도록-";

            echo $str;
        ?>
        <!-- strlen()을 이용한 문자의 길이 확인 -->
        <h2>strlen()</h2>
        <?php
            echo strlen($str);
        ?>
        <!-- 코드에서 줄바꿈 -->
        <h1>function</h1>
        <?php
            $str = "시간은 기다려 주지 않아, 그리고 인생에 지름길은 없어.. 
            
            그래서 난 최선을 다해 살아갈거야, 최선을 다해 사랑할거야, 최선을 다해 노력할거야. 인생의 후회가 남지 않도록-";

            echo $str;  // 코드에서의 줄 바꿈을 HTML은 무시하기 때문에 적용이 안돼!
        ?>
        <br>
        <h2>nl2br() : php new line to break 함수로 줄바꿈 하기!</h2>
        <?php
            echo nl2br($str);   // 이렇게 함수를 적용하면 줄 바꿈이 가능하다.
        ?>
        <!-- 함수의 활용 / 교재93p -->
        <h1>WEB</h1>
        <ol>
            <li><a href="index.php?id=html">HTML</a></li>
            <li><a href="index.php?id=css">CSS</a></li>
            <li><a href="index.php?id=dd">dd</a></li>
        </ol>
        <h2>
            <?php
                echo $_GET['id'];
            ?>
        </h2>
        <?php
            echo file_get_contents("data/css");
        ?>
        <br>
        <?php
            echo file_get_contents("data/html");
        ?>
        














    </body>
</html>