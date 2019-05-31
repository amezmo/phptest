<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$user = 'az_user';
$pass = 'password';
$server = 'localhost';

$dbh = new PDO("mysql:host=$server", $user, $pass);
$dbs = $dbh->query('SHOW DATABASES');

while (($db = $dbs->fetchColumn(0)) !== false) {
    echo $db . '<br>';
}
