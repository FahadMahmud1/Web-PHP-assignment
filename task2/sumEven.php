<?php
function sumEvenNumbers($numbers)
{
    $sum = 0;

    foreach ($numbers as $number) {
        if ($number % 2 === 0) {
            $sum += $number;
        }
    }

    return $sum;
}


$myArray = [5, 6, 7, 8, 9, 10];
$result = sumEvenNumbers($myArray);
echo "the sum of all even numbers in the array is: $result";
?>