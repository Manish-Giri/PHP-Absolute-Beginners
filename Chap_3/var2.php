<?php
error_reporting(E_ALL);
$foo = "I'm outside the function!";
function test() {
	return $foo;
}

echo test();	//a notice should be issued about $foo
?>