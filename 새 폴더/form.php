<!-- 폼 php 생성 -->
<?php  // form.php 파일 생성 후 전달된 값 출력 / 186p
    echo $_POST['title'];


  // title, description 값을 전달받아서 출력 / 187p
    echo "<p>title : ".$_POST['title']."</p>";
    echo "<p>description : ".$_POST['description']."</p>";


  // title, description 값을 전달받아 파일 생성 / 교재 188p 
    file_put_contents('data/'.$_POST['title'], $_POST['description']);
    header('Location: /index.php?id='.$_POST['title']);
?>