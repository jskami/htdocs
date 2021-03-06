<!-- 함수의 형식 4-20-3 pg175 -->
<?php
  function print_title() {
    if(isset($_GET['id'])) {
      echo $_GET['id'];
    } else {
      echo "Welcome";
    }
  }

  function print_description() {
    if(isset($_GET['id'])) {
      echo file_get_contents('data/'.$_GET['id']);
    } else {
      echo "Hello, PHP";
    }
  }
  
  function print_list() {
    $list = scandir('data');  // 읽어오는 것
    $i = 0;
    while ($i < count($list)) {
      if($list[$i] != '.') {
        if($list[$i] !='..') {
          echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>";
        }
      }
      $i = $i + 1;
    }
  }
?>

<!-- 이제 여기서부터 호출만 해주면 된다 -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php print_title(); ?></title>
</head>
<body>
  <h1><a href="index.php">WEB</a></h1>
  <ol>
    <?php
    print_list();
    ?>
  </ol>

  <a href="create.php"><button>create</button></a>
    <?php if(isset($_GET['id'])) { ?>
      <a href="update.php?id=<?= $_GET['id']; ?>"><button>update</button></a>
      <form action="delete_process.php" method="post">
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>" >
        <input type="submit" value="delete">
      </form>
    <?php } ?>

  <h2>
    <?php
    print_title();
    ?>
  </h2>
  <?php
    print_description();
  ?>
</body>
</html>
