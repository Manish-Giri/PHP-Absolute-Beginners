<?php

/* 
 * to return 2 variables from a function
 * use an array to return 
 * and use the list() function to assign a variable
 * to each array index as a comma separated list
 */

 function test() {
 	$foo = "Value one";
 	$bar = "Value two";

 	return array($foo, $bar);
 }

 list($one, $two) = test();

 echo $one, "<br />", $two,  "<br />";
 ?>