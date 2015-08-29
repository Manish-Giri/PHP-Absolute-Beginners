<?php
error_reporting(E_ALL);
$foo = "This is a complex value & it needs to be encoded";

//output original string
echo $foo, "<br /><br />";

//URL encode the string
$bar = urlencode($foo);

//output url encoded string
echo $bar, "<br><br>";

//decode the string and output
echo urldecode($bar);
?>