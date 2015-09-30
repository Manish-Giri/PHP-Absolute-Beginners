<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 8/30/15
 * Time: 3:20 AM
 */

/*
 * Using the PHP's MYSQL extension
 * IMP: do not use: risk of SQL Injection problem to induce potentially malicious data into DB
 * or perform bad operations, like delete DBs
 */

//open a mysql connection
$link = mysql_connect("localhost", "root", "manish");

if(!$link) {
    die("Connection failed: ".mysql_error());
}

//select the database to work with
$db = mysql_select_db("PHPAB_Chap4_one");
if(!$db) {
    die("Selected database unavailable: ".mysql_error());
}

//create and execute a mysql query
$sql = "SELECT artist_name FROM artists";
$result = mysql_query($sql);

//loop through the returned data and output it
while($row = mysql_fetch_array($result)) {
    printf("<p><strong>Artist</strong>: <strong>%s</strong></p>", $row["artist_name"]);
}

//free memory associated with the query
mysql_free_result($result);

//close connection
mysql_close($link);

?>