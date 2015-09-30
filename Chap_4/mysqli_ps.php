<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 8/30/15
 * Time: 6:02 AM
 * Shows the use of prepared statements along with MySQLi extension
 * this script displays an album name retrieved from the db, based on artist selected by user in the form "mysqli_form.html"
 */

if($_SERVER["REQUEST_METHOD"] == "POST") {
    //open a mysqli connection
    $link = new mysqli("localhost", "root", "manish", "PHPAB_Chap4_one");
    if(!$link) {
        die("Connection failed: ".$link->error());
    }

    /*
     * when a user submits the form, a new MYSQLi object is created with a placeholder for the artist_id in the where clause
     * can then call the prepare() on the MySQLi object and pass the query as a parameter
     */

    //create and execute a mysql query
    $sql = "SELECT artist_name, album_name from artists JOIN albums on artists.artist_id = albums.artist_id where albums.artist_id = ?";
    if($stmt = $link->prepare($sql)) {

        /*
         * with the statement prepared, need to tell mysql how to handle user input and insert it into the query
         * this is called "binding parameters" to the query, by calling bind_param() on the newly created $stmt which is a MySQLi_STMT object
         * Binding parameters requires 2 parameters
         * 1- pass in type of parameter(i/s/d/b)
         * 2- pass in parameter value using POST value
         * with the parameters bound, execute the statement using execute()
         * after query is executed, need to specify variables(1 each for every column requested) to hold results using bind_result()
         * then use fetch() to display returned results
         */

        $stmt->bind_param("i", $_POST["artist"]);
        $stmt->execute();
        $stmt->bind_result($artist, $album);
        while($stmt->fetch()) {
            printf("<p><strong>Artist Name:</strong> %s</p>", $artist);
            //printf("<p><strong>Artist Name:</strong> %s</p>"."<p><strong>Album Name: </strong> %s</p>", $artist, $album);
            printf("<p><strong>Album Name: </strong> %s</p>", $album);
        }

        //destroy resultset
        $stmt->close();

    }

    //close connection
    $link->close();


}

else {

    //if form was not submitted, display form

    ?>

<form action="mysqli_ps.php" method="post">
    <label for="artist">Select an artist:</label>
    <select name="artist" id="artist">
        <option value="1">Bon Iver</option>
        <option value="2">Feist</option>
    </select>
    <input type="submit">
</form>

<?php

    }//end else
?>