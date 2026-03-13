<?php

$host = "mysql.railway.internal";
$dbname = "railway";
$username = "root";
$password = "xaoGcrnaOwkVqKoKWGRscGwrxYnpPhTE";
$port = 3306;

$mysqli = new mysqli($host, $username, $password, $dbname, $port);
                     
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;