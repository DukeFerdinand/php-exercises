<?php

function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
    return $a - $b;
}

function multiply($a, $b)
{
    return $a * $b;
}

function divide($a, $b)
{
    return $a / $b;
}
function modulus($a, $b)
{
	return $a % $b;
}
// Add code to test your functions here

$answer1 = add(1,2);

$answer2 = subtract(1,2);

$answer3 = multiply(1,2);

$answer4 = divide(1,2);

$answer5 = modulus(1,2);

echo "$answer1\n";
echo "$answer2\n";
echo "$answer3\n";
echo "$answer4\n";
echo "$answer5\n";