<?php
    require_once('config.php');

    try {
        $connection = new PDO(DB_NAME, DB_USER, DB_PASS);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $exception) {
        die("An internal error has occurred.");
    }


