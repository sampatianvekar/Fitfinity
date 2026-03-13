<?php

$host = "yamabiko.proxy.rlwy.net";
$dbname = "railway";
$username = "root";
$password = "xaoGcrnaOwkVqKoKWGRscGwrxYnpPhTE";
$port = 36256;

$mysqli = new mysqli($host, $username, $password, $dbname, $port);
                     
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;