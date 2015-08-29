<?php 
error_reporting(E_ALL);
function test() {
	$foo = "Declared inside the function";
	$bar = "Also declared inside the function";

	return $bar;
}

$baz = test();

//notices for $foo and $bar
echo $foo, $bar, $baz;
?>