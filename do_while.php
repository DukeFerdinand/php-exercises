<?php

$var = 2;

do {
	echo "$var\n";
	$var = $var * $var;
} while ($var <= 65536);

?>