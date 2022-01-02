<?php 
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'phpcms');
// Select DB
/* mysqli_connect - 4 parameter */ 


$con = mysqli_connect(DB_HOSTNAME,DB_USERNAME,DB_PASSWORD, DB_DATABASE);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
