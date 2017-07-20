<?php
	$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

	foreach ($things as $thing) {
		if (is_int($thing)){
			echo $thing . PHP_EOL;
			echo "Number!\n";
		} elseif (is_array($thing)) {
			print_r($thing) . PHP_EOL;
			echo "Array!\n";
		}elseif (is_bool($thing)) {
			echo $thing . PHP_EOL;
			echo "Boolean!\n";
		}elseif (is_float($thing)) {
			echo $thing . PHP_EOL;
			echo "Float!\n";
		} elseif (is_string($thing)) {
			echo $thing . PHP_EOL;
			echo "String!\n";
		}elseif (is_null($thing)) {
			echo $thing . PHP_EOL;
			echo "Null!";
		}
	}

?>