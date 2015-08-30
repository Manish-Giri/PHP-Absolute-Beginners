<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 8/29/15
 * Time: 9:34 PM
 */

//check if form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST") {
    //display submitted information
    echo "Thanks for registering! <br>", "Username: ", htmlentities($_POST["username"]), "<br>",
          "E-Mail: ", htmlentities($_POST["email"]), "<br>";
}
else {

?>

    //if form was not submitted, display form
    <form action = "post1.php" method = "post">
        <label for="username">Username: </label>
        <input type ="text" name="username" >
        <label for="email">E-mail: </label>
        <input type="text" name="email" >
        <input type="submit" value="Register!";
    </form>

<?php

    } //end else
?>