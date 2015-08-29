<?php
$foo = "some value";

function test() {
	echo $GLOBALS["foo"];
}

test();
?>