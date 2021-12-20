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
                    echo file_put_contents("data/".$_POST['id']);
                } else {
                    echo "Hello, PHP";
                }
            }

            function print_list() {
                $list = scandir('./data');
                $i = 0;
                while($i < count($list)) {
                    if($list[$i] != '.') {
                        if($list[$i] != '..') {
                            echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
                        }
                    }
                    $i = $i + 1;
                }
            }
        ?>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        
        <?php
            if($_GET['id'] = 'php Web') {
                echo $_GET['id'];
            } else {
                echo "Welcome!";
            }
        ?>
    
        <h1><a href="function.php">WEB</a></h1>
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

        <!-- <form action="form.html" method="get">
        <p>
            <input type="text" name="title" placeholder="검색">
            placeholder="블라블라"를 지정하면 텍스트"~"이 출력된다. -->
        <!-- </p>
        <p>
            <textarea name="description"></textarea>
        </p> -->
        <a href="form.html"><button>create</button></a>
        <a href="update_process.php?id=<?=$_POST['id']; ?>"><button>update</button></a>
        <a href="form.html"><button>delete</button></a>
        
        <?php if(isset($_POST['id'])) { ?>
            <a href="update.php?id=<?= $_POST['id']; ?>"><button>update</button></a>
        <?php } ?>
        <!-- <p>
            <input type="submit">
        </p> -->
    </form>       
    </body>
</html>