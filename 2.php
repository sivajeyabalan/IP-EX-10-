<?php
function isArmstrong($number) {
    $total = 0;
    $numDigits = strlen((string)$number);
    $temp = $number;

    while ($temp != 0) {
        $remainder = $temp % 10;
        $total += $remainder ** $numDigits;
        $temp = (int)($temp / 10);
    }

    return $total == $number;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["num"];
    if (isArmstrong($num)) {
        echo "$num is an Armstrong number.";
    } else {
        echo "$num is not an Armstrong number.";
    }
}
?>

<form method="post" action="">
    Enter a number: <input type="number" name="num"><br>
    <input type="submit" value="Check Armstrong">
</form>
