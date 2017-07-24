<?php

$result = 0;
$arr = [2, 1, -5, "bob", 37];

foreach ($arr as $num) {
	if (is_numeric($num)){
		if ($num % 2 != 0){
			echo "$num is odd! Adding!\n";
			$result = $result + abs($num);
			echo "Total: $result\n";
		} else {
			echo "$num is even! multiplying!\n";
			$result = $result * $num;
			echo "Total: $result\n";
		}
	} else {
		echo "NaN! Skipping!\n";
		continue;
	}
}
echo "final -> $result\n";


?>