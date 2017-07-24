<?php



// function upperFirst($string){
// 	if (is_string($string)){
// 		return ucfirst($string);
// 	} else {
// 		echo "ERROR: Not a string";
// 	}
// }
// fwrite(STDOUT, "Please enter a string: ");

// $userPrompt = fgets(STDIN);

// echo upperFirst(trim($userPrompt));


function greeting($first, $last){
	if (is_string($first) && is_string($last)){
		echo "Hello, $first $last!\n";
	} else {
		echo "Either first or last name is not valid!";
	}
}
fwrite(STDOUT, "First Name: ");
$first = trim(fgets(STDIN));
fwrite(STDOUT, "Last Name: ");
$last = trim(fgets(STDIN));

echo greeting($first, $last);
?>