<?php

// TODO: Create your inspect() function here
function inspect($var){
	$type = gettype($var);
	switch ($var) {
		case is_null($var):
			echo "The $type is NULL!\n";
			break;
		case is_string($var):
			echo "The $type has a value of $var\n"; 
			break;
		case is_int($var):
			echo "The $type has a value of $var\n"; 
			break;
		case is_array($var):
			echo "The $type has a value of: \n";
			echo print_r($var);
			break;
		case is_bool($var):
			echo "The $type has a value of $var\n";
			break;
		
		default:
			echo "ERROR: Something went wrong! Likely the internal function was not called prooperly!\n";
			break;
	}
}
// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

// TODO: After each echo statement, use inspect() to output the variable's type and its value
$arr = [$string1,$string2, $array1, $array2, $bool1, $num1, $num2, $num3, $num4, $null];

foreach ($arr as $test) {
	echo inspect($test);
}

// echo 'Inspecting $num1:' . PHP_EOL;

// echo 'Inspecting $num2:' . PHP_EOL;

// echo 'Inspecting $num3:' . PHP_EOL;

// echo 'Inspecting $num4:' . PHP_EOL;

// echo 'Inspecting $null:' . PHP_EOL;

// echo 'Inspecting $bool1' . PHP_EOL;

// echo 'Inspecting $bool2' . PHP_EOL;

// echo 'Inspecting $string1' . PHP_EOL;
// echo inspect($string1);
// echo 'Inspecting $string2' . PHP_EOL;
// echo inspect($string2);
// echo 'Inspecting $array1' . PHP_EOL;
// echo inspect($array1);
// echo 'Inspecting $array2' . PHP_EOL;
// inspect($array2);