

<?php
$numbers = array(2, 4, 6, 8, 10);

// i. Print the first element of the array.
echo "1. The first element of the array is: " . $numbers[0] . "<br>";

// ii. Print the last element of the array.
$lastIndex = count($numbers) - 1;
echo "2. The last element of the array is: " . $numbers[$lastIndex] . "<br>";

// iii. Add a new element with the value of 12 to the end of the array
$numbers[] = 12;
echo "3. Added 12 to the end of the array. New array: " . implode(", ", $numbers) . "<br>";

// iv. Calculate the sum of all the elements in the array and print the result.
$sum = array_sum($numbers);
echo "4. The sum of all elements in the array is: " . $sum . "<br>";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 6</title>
    <style>
        body{
            font-family:poppins;
        }
    </style>
</head>
<body>
    
</body>
</html>