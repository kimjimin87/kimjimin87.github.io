<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>결과</title>
</head>
<body>

<?php

// 1️⃣ 짝수/홀수 합
if (isset($_GET['mode']) && $_GET['mode'] == "sum") {

    $input = (int)$_GET['num'];

    $evenSum = 0;
    $oddSum = 0;

    echo "input number : $input<br>";

    echo "sum of even number less than $input : ";
    for ($i = 2; $i < $input; $i += 2) {
        echo "$i+";
        $evenSum += $i;
    }
    echo "=" . $evenSum . "<br>";

    echo "sum of odd number less than $input : ";
    for ($i = 1; $i < $input; $i += 2) {
        echo "$i+";
        $oddSum += $i;
    }
    echo "=" . $oddSum;
}

// 2️⃣ 최대값
if (isset($_GET['mode']) && $_GET['mode'] == "max") {

    $inputStr = $_GET['numbers'];
    $numbers = explode(" ", $inputStr);
    $numbers = array_map('intval', $numbers);

    echo "<br><br>";
    echo "input number : " . count($numbers) . "<br>";

    foreach ($numbers as $num) {
        echo $num . " ";
    }

    $max = $numbers[0];
    foreach ($numbers as $num) {
        if ($num > $max) {
            $max = $num;
        }
    }

    echo "<br>maximum = $max";
}

?>

</body>
</html>