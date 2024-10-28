<?php
$server = "162.241.2.39";
$ussername = "itsonapp_244228";
$password = "244228db#529Y";
$dbname = "itsonapp_244228";

$connection = new mysqli($server, $ussername, $password, $dbname);
$connection->set_charset("utf8");
if($connection->connect_error){
    die("FALLO DE RED: " .$connection->connect_error);
}

?>