<?php
  // echo "<p>title : ". $_POST['title']. "</p>";
  // echo "<p>description : ".$_POST['description']."</p>";
  // file_put_contents('data/'.$_GET['title'], $_GET['description']);
  file_put_contents('data/'.$_POST['title'], $_POST['description']); 
  header('Location: /index.php?id='.$_POST['title']); //redirection
?>