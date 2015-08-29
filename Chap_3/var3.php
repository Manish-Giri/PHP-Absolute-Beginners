<?php
$foo = "I'm outside the function!";
function test() {
	//declare foo as a global variable
	global $foo;
	return $foo;
}

echo test();
?>