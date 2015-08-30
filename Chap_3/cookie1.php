<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 8/30/15
 * Time: 1:00 AM
 */

/*
 * If user is returning to this page after previously registering,
 * use the cookie to welcome them back
 */

if(isset($_COOKIE["username"])) {
    $name = htmlentities($_COOKIE["username"]);
    echo "<p><strong>Welcome Back, $name!</strong></p>";
}

/*
 * If user is new and submits the registration form, set a cookie with the username
 * and display a thank you message
 */

else if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["username"])) {

    //sanitize the input and store in a variable
    $uname = htmlentities($_POST["username"]);

    //set a cookie that expires in a week
    $expires = time() + 7 * 24 * 60 * 60;
    setcookie("username", $uname, $expires, '/');

    //output a thank you message
    echo "<p><strong>Thank You</strong> for registering, $uname!</p>";
}

/*
 * If the user has not previously registered, or filled out the registration form,
 * display the form
 */
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
