<?php

function random($arg)
{
	if (is_array($arg)){
		$num = mt_rand(0, (count($arg) -1));
		return $arg[$num];
	} else {
		$arr = str_split($arg);
		$num = mt_rand(0, (count($arr) - 1));
		return $arr[$num];
	}
}
function randColor(){
	$num = '';
	for ($i = 0; $i <= 5; $i++ ){
		$num .= random('ABCDEF0123456789');
	}
	
	echo "\$randColor: # $num;" . PHP_EOL;
	$scss = '../sites/mysite.dev/public/sass/rand.scss';
	$handle = fopen($scss, 'w');
	fwrite($handle, "\$randColor: # $num;" . PHP_EOL);
}
randColor();
