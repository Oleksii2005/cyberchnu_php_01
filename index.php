<!-- 4.22 -->
<?php
$num = 12; // given number

$isEven = $num % 2 == 0;
$endsWith7 = $num % 10 == 7;

echo "Is the number even? ";
var_dump($isEven);

echo "Does the number end with 7? ";
var_dump($endsWith7);
?>

<!-- 4.23 -->

<?php
$num = 48; // given number

$firstDigit = (int) ($num / 10);
$secondDigit = $num % 10;

$biggerDigit = max($firstDigit, $secondDigit);
$isSameDigits = $firstDigit == $secondDigit;

echo "The bigger digit is: ";
var_dump($biggerDigit);

echo "Are the digits the same? ";
var_dump($isSameDigits);
?>

<!-- 4.24 -->

<?php
$num = 48; // given number

$firstDigit = (int) ($num / 10);
$secondDigit = $num % 10;

$sumOfDigits = $firstDigit + $secondDigit;
$cubeOfSum = $sumOfDigits ** 3;

$isEqual = $num ** 2 == $cubeOfSum;

echo "Is the square of the number equal to the cube of the sum of its digits? ";
var_dump($isEqual);
?>

<!-- 4.25 -->

<?php
$num = 52; // given number

$firstDigit = (int) ($num / 10);
$secondDigit = $num % 10;

$sumOfDigits = $firstDigit + $secondDigit;
$isTwoDigits = $sumOfDigits >= 10 && $sumOfDigits <= 99;
$biggerThanA = $sumOfDigits > $num;

echo "Is the sum of the digits a two-digit number? ";
var_dump($isTwoDigits);

echo "Is the sum of the digits greater than the number? ";
var_dump($biggerThanA);
?>

<!-- 4.26 -->

<?php
$num = 48; // given number

$firstDigit = (int) ($num / 10);
$secondDigit = $num % 10;

$sumOfDigits = $firstDigit + $secondDigit;

$isDivisibleBy3 = $sumOfDigits % 3 == 0;
$isDivisibleByA = $sumOfDigits % $num == 0;

echo "Is the sum of the digits divisible by 3? ";
var_dump($isDivisibleBy3);

echo "Is the sum of the digits divisible by the number? ";
var_dump($isDivisibleByA);
?>