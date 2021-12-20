<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <title>update</title>
</head>
<body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
    <?php
            $list = scandir('./data');
            $i = 0;
            while($i < count($list)) {
                if($list[$i] != '.') {
                    echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
                }
                $i = $i +1;
            }
            ?>
    </ol>
    <a href="update.php">update</a>
    <?php if(isset($_POST['id'])) { ?>
        <a href="update.php?id=<?= $_POST['id']; ?>">update</a>
    <?php } ?>
    <form action="update_process.php" method="post">
        <input type="hidden" name="old_title" value="<?= $_POST['id'] ?>" />
    <p>
        <input type="text" name="title" placeholder="Title" value="<?php print_title(); ?>" />
    </p>
    <p>
        <textarea name="description" placeholder="Description"><?php print_title(); ?></textarea>
    </p>
    <p>
        <input type="submit" value="Submit" />
    </p>
    </form>

</body>
</html>