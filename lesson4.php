<?php
$lineBreak = "<br>";

# задание 1
# 2 аргумента (от и до)

# задание 2
# на последнем

# задание 3
function temp($firstNumber, $secondNumber){
	$lineBreak = "<br>";
	$result = $firstNumber + $secondNumber;
	return "Результат: {$result}. {$lineBreak}";
}

echo temp(1, 26);

# задание 4
function calculateHypotenuse($x, $y){
	$lineBreak = "<br>";
	$result = hypot($x, $y);
	return "Длина гипотенузы: {$result}. {$lineBreak}";
}

echo calculateHypotenuse(2, 55);


# задание 5
$randomNum = random_int(67, 200);
echo "{$randomNum} {$lineBreak}";


# задание 6
$firstNum = mt_rand(50, 100);
$secondNum = mt_rand(1,99) / 100;
$result = $firstNum + $secondNum;
echo "{$result} {$lineBreak}";