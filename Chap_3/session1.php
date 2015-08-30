<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 8/29/15
 * Time: 11:58 PM
 */

//initialize session data
session_start();

//if the user is already registered, display a message letting them know
if(isset($_SESSION["username"])) {
    echo "You're already registered as ".$_SESSION["username"];
}

//check if form was submitted
else if($_SERVER["REQUEST_METHOD"] == "POST") {

    /*
     * If both username and email fields were filled out,
     * save the username in a session variable
     * and output a thank you message to the browser.
     * To eliminate leading and trailing whitespace, use trim()
     */
    if(!empty(trim($_POST["username"])) && !empty(trim($_POST["email"]))) {

        //store escaped $_POST values in variables
        $uname = htmlentities($_POST["username"]);
        $email = htmlentities($_POST["email"]);

        $_SESSION["username"] = $uname;

        echo "<p><strong>Thank You for registering!</strong></p>",
            "<p>Username: $uname</p>",
            "<p>E-mail: $email</p>";
    }

    /*
     * If user did not fill out both fields, display a message letting them know that both fields
     * are mandatory for registration
     */

    else {
        echo "<p>Please fill out <em>both</em> fields</p>";
    }

    //unset($_SESSION["username"]);
}

//if form was not submitted, display the form html
else {

    ?>

<form action="session1.php?username=overwritten" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" placeholder="Enter user name">
    <label for="email">Email:</label>
    <input type="text" name="email" placeholder="Enter your email">
    <input type="submit" value="Register!">
</form>
<?php
    }
?>