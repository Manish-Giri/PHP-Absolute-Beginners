<ul id="menu">
    <li><a href="get_value.php">Home</a></li>
    <li><a href="get_value.php?page=about">About Us</a> </li>
    <li><a href="get_value.php?page=contact">Contact Us</a> </li>

</ul>


<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 8/29/15
 * Time: 8:58 PM
 * Very basic security measure to ensure that the page variable has been passed
 * allowing to ward off very basic mischief using htmlentities()
 */

if(isset($_GET["page"])) {
    $page = htmlentities($_GET["page"]);
}
else {
    $page = null;
}

switch($page) {

    case "about" : echo "<h1>About Us</h1><p>We are rockin' web developers</p>";
        break;
    case "contact": echo "<h1>Contact Us</h1><p>Email us at <a href='#'>info@example.com</a></p>";
        break;

    //create a default if no variable was passed
    default: echo "<h1>Select a page!</h1><p>Choose a page from above to learn more about us</p>";
        break;
}

?>