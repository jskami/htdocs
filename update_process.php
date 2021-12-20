<?php
  rename('data/'.$_POST['old_title'], 'data/'.$_POST['title']); //두번째 인자로 새로운 이름으로 변경
  file_put_contents('data/'.$_POST['title'], $_POST['description']); //수정된 파일의 description
  header('Location: /index.php?id'.$_POST['title']);// redirection

?>