<!-- 폼 php 생성 -->
<?php  // form.php 파일 생성 후 전달된 값 출력 / 186p
    echo $_GET['title'];
    // echo $_POST['title'];
?>

<?php  // title, description 값을 전달받아서 출력 / 187p
    echo "<p>title : ".$_GET['title']."</p>";
    echo "<p>description : ".$_GET['description']."</p>";
    // echo "<p>title : ".$_POST['title']."</p>";
    // echo "<p>description : ".$_POST['description']."</p>";
?>

<?php  // title, description 값을 전달받아 파일 생성 / 교재 188p 
    file_put_contents('data/'.$_GET['title'], $_GET['description']);
    // file_put_contents('data/'.$_POST['title'], $_POST['description']);
?>