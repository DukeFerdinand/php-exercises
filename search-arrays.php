<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// $query = trim(fgets(STDIN));

// $result = array_search($query, $names);

// if ($result){
// 	echo "True\n";
// } else {
// 	echo "Name not found\n";
// }

function compareArrays($arr1, $arr2) {
	$total = count(array_intersect($arr1, $arr2));
	return "$total\n";
}

echo compareArrays($names, $compare);