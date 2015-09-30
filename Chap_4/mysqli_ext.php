<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 8/30/15
 * Time: 5:03 AM
 * shows the use of MYSQLi extension that's preferred over the MYSQL extension
 * uses OO interface rather than procedural interfaces which allows us to use objects that store methods, thereby
 * allowing to bypass having to pass variables explicitly between functions(procedures)
 */

//open a MYSQL connection by instantating a MYSQL object
$link = new mysqli("localhost", "root", "manish", "PHPAB_Chap4_one");
if(!$link) {
    die("Connection failed: ". $link->error());
}

//create and execute a mysql query
$sql = "SELECT artist_name FROM artists";
$result = $link->query($sql);

//loop through the returned result and output it
while($row = $result ->fetch_assoc()){
    printf("<p><strong>Artist:</strong> %s</p>", $row["artist_name"]);
}

//free memory associated with query
$result->close();

//close connection
$link->close();
?>