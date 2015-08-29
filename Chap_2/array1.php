<?php

	echo "<h1>Arrays</h1>";
	
	echo "<h2>Array as K-V</h2>";
	$entry = array("title" => "Sample Title",
					"date" => "April 13, 2009",
					"author" => "Jason",
					"body" => "Today I wrote a blog entry"
					 );

	echo $entry["title"]."<br>".$entry["date"]."<br>".$entry["author"]."<br>".$entry["body"]."<br>";


	echo "<h2>Array as indexes</h2>";
	$entry2 = array("Sample Title", "April 14 2009", "Jason", "Today I wrote another blog entry");

	echo $entry2[0]." by ".$entry2[2];

	echo "<h2>Array in strings using complex syntax</h2>";
	
	$person = array("name" => "Jason", "age" => 23);
	echo "This person's name is {$person["name"]} and he is {$person["age"]}";

	echo "<h2>Array in strings without using complex syntax</h2>";
	echo "This person's name is $person[name] and he is $person[age]";

	echo "<h2>Multidimensional arrays</h2>";

	$people = array(

					array("name" => "Jason", "age" => 23),	//people[0]
					array("name" => "Carly", "age" => 18) 	//people[1]
		);

	echo "{$people[0]["name"]} has a sister {$people[1]["name"]} who is {$people[1]["age"]} years old";


	$colors = array("fruits" => array("apple" => "red", "plum" => "purple"),
                    "flowers" => array("rose" => "red", "violet" => "blue")
        );

    echo "<p>An apple is {$colors["fruits"]["apple"]} and a violet is {$colors["flowers"]["violet"]}</p>";

    //test
    echo "Hi there <br>";
    echo "<p>Hi</p>"

?>