<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'ls-2a84279bbd68730697affd6e2cc5b08bfb40864d.cmuvblbnrbtw.us-west-2.rds.amazonaws.com');
define('DB_USERNAME', 'reinvent21');
define('DB_PASSWORD', 'reinvent21');
define('DB_NAME', 'reinvent21');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>