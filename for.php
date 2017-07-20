<?php
	fwrite(STDOUT, "Starting Number: ");
	$start = trim(fgets(STDIN));

	if (!is_numeric($start)){
		$start = 1;
		fwrite(STDOUT, "Not a number, defaulting to 1\n");
	}

	fwrite(STDOUT, "Ending Number: ");
	$end = trim(fgets(STDIN));

	if (!is_numeric($end)){
		$end = 10;
		fwrite(STDOUT, "Not a number, defaulting to 10\n");
	}
	fwrite(STDOUT, "Increment by: ");
	$inc = trim(fgets(STDIN));

	if (!is_numeric($inc)){
		$inc = 1;
		fwrite(STDOUT, "Not a number, defaulting to 1\n");
	}

	for($i = $start; $i <= $end; $i += $inc){
		if ($i % 3 == 0 && $i % 5 == 0 ){
			echo "FizzBuzz" . PHP_EOL;
		} else if ($i % 3 == 0) {
			echo "Fizz" . PHP_EOL;
		} else if ($i % 5 == 0) {
			echo "Buzz" . PHP_EOL;
		} else {
			echo $i . PHP_EOL;
		}
	}
?>