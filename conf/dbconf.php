<?php
//constant variable
define('SERVERNAME', '127.0.0.1');
define('USERNAME', 'root');
define('PASSWORD', 'mariadb');
define('DBNAME', 'FootprintDB');

$connect = mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DBNAME);

?>