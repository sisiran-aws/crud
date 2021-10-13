<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'ls-bb0cf7daf5cf95380191aefc263b532ed2a4ece0.cmuvblbnrbtw.us-west-2.rds.amazonaws.com');
define('DB_USERNAME', 'sisiradb');
define('DB_PASSWORD', 'sisiradb');
define('DB_NAME', 'sisiradb');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>