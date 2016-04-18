<?php

$min = 0;
$max = 100;

if (!empty($_REQUEST['max'])) {
	$max = intval($_REQUEST['max']);
}

if (!empty($_REQUEST['min'])) {
	$min = intval($_REQUEST['min']);
}

print_r($_REQUEST);

$rand = rand($min, $max);
echo $rand;
