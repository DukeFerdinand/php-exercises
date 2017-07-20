<?php

$a = 2;

do {
	echo "$a\n";
	$a = $a * $a;
} while ($a <= 65536);

?>