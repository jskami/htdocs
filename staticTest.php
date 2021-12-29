<!DOCTYPE html>
<html>
<body>

<?php
class greeting {
    public static function welcome() {
        echo "Hello World!";
    }
}

class SomeOtherClass {
    public function message() {
        greeting::welcome();
    }
}

$obj1 = new SomeOtherClass();
$obj1 -> message();
?>

</body>
</html>