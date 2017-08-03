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

// function compareArrays($arr1, $arr2) {
// 	$total = count(array_intersect($arr1, $arr2));
// 	return "$total\n";
// }

// echo compareArrays($names, $compare);


function combineArrays($arr1, $arr2)
{
	$arr3 = [];
	for ($i = 0; $i < count($arr1); $i++){
		if ($arr1[$i] == $arr2[$i])
		{
			array_push($arr3, $arr1[$i]);
		} else {
			array_push($arr3, $arr1[$i]);
			array_push($arr3, $arr2[$i]);
		}
	}
	return $arr3;
}
$arr3 = combineArrays($names, $compare);
print_r($arr3);