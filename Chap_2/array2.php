<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 8/29/15
 * Time: 12:16 AM
 */
//pass by value example
$foo = 2;
$bar = $foo;

echo "<p> foo = ".$foo."</p>";

$foo += 4;

echo "<p>bar = ".$bar."</p>";

echo "<p>foo = ".$foo."</p>";

//pass by reference example
$person = array("name" => "Jason", "age" => 23);
$age =& $person["age"];

//output array before doing anything
print_r($person);

//add a year to bday
++$age;

//output array again to see changes
print_r($person);

?>


