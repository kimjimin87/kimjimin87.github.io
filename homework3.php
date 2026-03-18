<?php
$input = 33;

$evenSum = 0;
$oddSum = 0;

for ($i = 1; $i < $input; $i++) {
    if ($i % 2 == 0) {
        $evenSum += $i;
    } else {
        $oddSum += $i;
    }
}

echo "input number : " . $input . "<br>";
echo "sum of even number less than " . $input . " : " . $evenSum . "<br>";
echo "sum of odd number less than " . $input . " : " . $oddSum . "<br>";
?>