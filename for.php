<?php
	$str = "apt, beavis.zen, bong, bud-frogs, bunny, calvin, cheese, cock, cower, daemon, default, dragon, dragon-and-cow, duck, elephant, elephant-in-snake, eyes, flaming-sheep, ghostbusters, gnu, head-in, hellokitty, kiss, kitty, koala, kosh, luke-koala, mech-and-cow, meow, milk, moofasa, moose, mutilated, pony, pony-smaller, ren, sheep, skeleton, snowman, sodomized-sheep, stegosaurus, stimpy, suse, three-eyes, turkey, turtle, tux, unipony, unipony-smaller, vader, vader-koala, www";
	

	$arr = explode(", ", $str);
 	// var_dump($arr);
 	// echo `cowsay -f "$arr[$rand]" mooo`;

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
			$rand = mt_rand(0, 51);
			fwrite(STDOUT, `cowsay -f "$arr[$rand]" FizzBuzz`);
		} else if ($i % 3 == 0) {
			$rand = mt_rand(0, 51);
			// echo "Fizz" . PHP_EOL;
			fwrite(STDOUT, `cowsay -f "$arr[$rand]" Fizz`);
		} else if ($i % 5 == 0) {
			$rand = mt_rand(0, 51);
			// echo "Buzz" . PHP_EOL;
			fwrite(STDOUT, `cowsay -t "$arr[$rand]" Buzz`);
		} else {
			echo $i . PHP_EOL;
		}
	}


?>