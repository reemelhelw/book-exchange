<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) 
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'demo');
 */
/* Attempt to connect to MySQL database */
$link = mysqli_connect('localhost', 'root', '', 'demo2');
 
// Check connection
if(!$link){
    die("ERROR: Could not connect. " .mysql_error());
}
?>