<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 8/29/15
 * Time: 10:16 PM
 */

//check if form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST") {

    //check if file was uploaded without errors
    if(isset($_FILES["photo"]) && is_uploaded_file($_FILES["photo"]["tmp_name"]) && $_FILES["photo"]["error"] == "UPLOAD_ERR_OK") {

        //check if file is a jpg image
        if($_FILES["photo"]["type"] == "image/jpeg") {
            $tmp_img = $_FILES["photo"]["tmp_name"];

            //create an image resource
            $image = imagecreatefromjpeg($tmp_img);

            //tells browser what type of file
            header("Content-Type: image/jpeg");

            //output file to browser
            imagejpeg($image, '',90);

            //free memory used for file
            imagedestroy($image);

        }

        else {
            //if file was not jpeg
            echo "<p>Uploaded file was not a JPG image!</p>";
        }
    }

    else {
        echo "<p>No photo uploaded</p>";
    }


}

else {

    //if form was not submitted, display form HTML

?>

<form action="get_file.php" method="post" enctype="multipart/form-data">
    <label for="photo">User Photo:</label>
    <input type="file" name="photo" accept="image/*">
    <input type="submit" value="Upload photo">

</form>

<?php

    } //end else
?>