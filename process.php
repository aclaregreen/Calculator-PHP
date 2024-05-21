<html>

<head>
    <title>
        Calculator
    </title>
</head>

<body>
    <?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["op"];


    $result = null;

    if (!is_numeric($num1) or !is_numeric($num2)) {
        echo "Enter numbers!<br>";
    } else {
        if ($op == '+') {
            $result = $num1 + $num2;
        } else if ($op == '-') {
            $result = $num1 - $num2;
        } else if ($op == "*") {
            $result = $num1 * $num2;
        } else if ($op == "/") {
            if ($num2 == 0) {
                echo "You can't divide by 0!<br>";
            } else {
                $result = $num1 / $num2;
            }
        } else {
            echo "Enter a valid operator!<br>";
        }
        if ($result != null) {
            echo "The result is ", $result, "<br>";
        }
    }
    echo "<form action='test.php' method='post'>
            <input type='submit' value='back'>
            </form>";
    ?>
</body>

</html>