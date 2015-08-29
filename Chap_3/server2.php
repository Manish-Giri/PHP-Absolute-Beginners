<?php

//path to current file
echo "Path to current file: ". $_SERVER["PHP_SELF"] ."<br />";

//info. about user's browser
echo "Info. about user's browser: ".$_SERVER["HTTP_USER_AGENT"]."<br />";

//address of page that referred the user(if any) - note: IF condition
if(isset($_SERVER["HTTP_REFERRER"])) {
	echo $_SERVER["HTTP_REFERRER"];
}
else {
	echo "No Referrer set <br />";
}

//IP Address from which user is viewing the script
echo "IP address of user: ".$_SERVER["REMOTE_ADDR"]. "<br />";

//human readable export of contents of $_SERVER
print_r($_SERVER);
?>