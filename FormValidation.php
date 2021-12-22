<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<!-- https://www.w3schools.com/php/php_form_complete.asp
    ID : 8자 이상, 1개 이상 대문자, 1개 이상 숫자
    PW : ?
    이름 : 한글 1자 이상, 4자 이하
    번호 : 000-0000-0000
    E-mail : 일반적인 규칙 -->
<?php
$idErr = $pwErr = $nameErr = $phoneNErr = $emailErr = "";
$id = $pw = $name = $phoneN = $email = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST["id"])) {
        $idErr = "ID is required";
    } else {
        $id = test_input($_POST["id"]);
        //check if id 8글자 이상, 1개이상의 대문자, 1개이상의 숫자
        if(!preg_match("(?=.[A-Za-z])(?=.\d)[A-Za-z\d]{8,}$", $id)) {
        $idErr = "Only id 8글자 이상, 1개이상의 대문자, 1개이상의 숫자";
        }
    }


    if (empty($_POST["pw"])) {
        $pwErr = "PW is required";
    } else {
        $pw = test_input($_POST["pw"]);
        if (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/m", $pw)) {
            $pwErr = "PW is required";
        }
    }

    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
        if (!preg_match("/^[가-힣]{3,12}$/", $name)) {
            $nameErr = "It does not allow characters and spaces";
        }
    }

    if (empty($_POST["phoneN"])) {
        $phoneNErr = " phoneNum is required";
    } else {
        $phoneN = test_input($_POST["phoneN"]);
        if (!preg_match("/09(0[1-2]|1[\d]|3[\d]|2[0-1])[\d]{3}[\d]{4}/" , $phoneN)) {
            $phoneN = "phoneNum is required";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }
}
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>

<h2>PHP form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?=htmlspecialchars($_SERVER["PHP_SELF"])?>">
    ID: <input type="text" name="id" value="<?php echo $id;?>">
    <span class="error">* <?php echo $idErr;?></span>
    <br>
    <br>
    PW: <input type="text" name="pw" value="<?php echo $pw;?>">
    <span class="error">* <?php echo $pwErr;?></span>
    <br>
    <br>
    Name: <input type="text" name="name" value="<?php echo $name;?>">
    <span class="error">* <?php echo $nameErr;?></span>
    <br>
    <br>
    PhoneN : <input type="text" name="phoneN" value="<?php echo $phoneN;?>">
    <span class="error">* <?php echo $phoneNErr;?></span>
    <br>
    <br>
    E-mail: <input type="text" name="email" value="<?php echo $email;?>">
    <span class="error">* <?php echo $emailErr;?></span>
    <br>
    <br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
    echo "<h2>Your Input:</h2>";
    echo $id;
    echo "<br>";
    echo $pw;
    echo "<br>";
    echo $name;
    echo "<br>";
    echo $phoneN;
    echo "<br>";
    echo $email;
?>

</body>
</html>