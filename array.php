<!DOCTYPE html>
<head>
  <meta charset="utf-8">
</head>
<body>
  <h1>Array Example</h1>
  <?php
    $coworkers = array(
      '반장' => '정승목', 
      '부반장' => '김희교바보', 
      '총무' => '고은희'
    );

    echo $coworkers[0]. "<br>"; //인덱스 값으로 접근 - 키와 value 값으로 선언해서 인덱스로 접근 불가능 따라서 틀린 예 잘못된 요구
    echo $coworkers['반장']. "<br>"; //키값으로 접근

    echo var_dump($coworkers). "<br>";
    //utf는 한글글자당 3bite 그래서sting(9) / 영어 알파벳 1bite
    echo count($coworkers). "<br>";
    var_dump(count($coworkers)). "<br>";
    
    // 배열에 새로운 요소 추가 
    //array_push($coworkers, '유하르방=>고유비');
    $coworkers += ['유하르방'=>'고유비'];
    // If you want to add elements to the END of an associative array you should use the unary array union operator (+=) instead...


    var_dump($coworkers);

  ?>

  
</body>
</html>