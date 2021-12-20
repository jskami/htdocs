<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>WEB</h1>
  <ol>
    <?php
    $list = scandir('data');
    $i = 0;
    while($i < count($list)) {
      if($list[$i] != '.') {
        if($list[$i] !='..') {
          ?>
          <li><a href="index.php?id=<?=$list[$i]?>"><?=$list[$i]?></a></li>
          <?php
        }
      }
      $i = $i + 1;
    }
    ?>
    <!-- <li><a href="index.php?id=HTML">HTML</a></li>
    <li><a href="index.php?id=CSS">CSS</a></li>
    <li><a href="index.php?id=JavaScript">JavaScript</a></li> -->
  </ol> 
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
  if(isset($_GET['id'])) {
    echo file_get_contents("data/".$_GET['id']);
  } else {
    echo "Hello, PHP";
  }
  ?>

</body>
</html>

<!-- 메뉴얼 페이지를 쓸때 필요 -->


<!-- <?php
  //phpinfo();
  echo date('Y-m-d H:i:s');
  echo '<br>';

  $a = 100.12;
  var_dump($a);
  echo '<br>';

  $a = 'korea' ;
  var_dump($a) ;
  echo '<br>';

    echo "안녕하세요 ..." . $_GET['name'] . "님!!";
    echo $_GET['address'] . "에 사시는군요...";
?> -->