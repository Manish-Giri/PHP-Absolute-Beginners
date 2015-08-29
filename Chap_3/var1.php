<?php
/**
 * Created by PhpStorm.
 * User: Manish
 * Date: 8/29/2015
 * Time: 6:04 PM
 */
$foo = "some value";
include_once "extras.php";  //foo is available in extras.php
$bar = "another value"; //bar is not available in extras.php
echo "var1.php: Foo is $foo and bar is $bar. <br>";
?>
