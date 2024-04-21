<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];

    $largest = $num1;

    if ($num2 > $largest) {
        $largest = $num2;
    }

    if ($num3 > $largest) {
        $largest = $num3;
    }

    echo "The largest number is: $largest";
}
?>

<form method="post" action="">
    Number 1: <input type="number" name="num1"><br>
    Number 2: <input type="number" name="num2"><br>
    Number 3: <input type="number" name="num3"><br>
    <input type="submit" value="Find Largest">
</form>
