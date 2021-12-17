<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Array Eample</h1>
        <?php
            $coworkers = array( //이번엔 key를 설정하고 값을 부여하는 방식으로 만들어 보았다!
                '반장' => '정승목',
                '부반장' => '김희교바보',
                '총무' => '고은희');

            echo $coworkers[0]. "<br>";;                 // 인덱스로 주었을 때는 가능한데 지금은 key와 value 값 방식으로 주었기 때문에 이것은 틀린 예이다.
            echo $coworkers['반장']. "<br>";;
            var_dump($coworkers);                        // 타입을 알아보기 위함
            echo count($coworkers). "<br>";;             // 개수를 알아보기 위함
            var_dump(count($coworkers)). "<br>";;        // 배열 개수의 타입을 알아보기 위함

            // 배열에 새로운 요소 추가 array_push / 교재 140p
            // array_push($coworkers, '유하르방' => '고유비');
            $coworkers += [ "유하루방"=>'고유비']; // key와 value값을 주고 새롭게 추가 하기!
            var_dump($coworkers);

        ?>
    </body>

</html>