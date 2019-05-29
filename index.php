<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

try {
    $dbo = new PDO("mysql:host=localhost", "ryan", "password");
    $dbo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e) {
    var_dump($e);
}

$rs = $dbo->query("SHOW DATABASES");
while ($h = $rs->fetch(PDO::FETCH_NUM)) {
    echo $r[0] . "<br>";
}
