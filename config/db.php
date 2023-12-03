<?php

@define('DBSERVER', 'localhost');
@define('DBUSERNAME', 'root');
@define('DBPASSWORD', '');
@define('DBNAME', 'astromine');
@define('PORT', '3308');

 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DBSERVER, DBUSERNAME, DBPASSWORD, DBNAME, PORT);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}



?>

