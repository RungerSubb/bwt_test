<?php
/**
 * create object for connecting to database
 *
 * @return mysqli
 */
function createDatabaseObject()
{
    $databaseLocation = "127.0.0.1";
    $databaseName = "bwt";
    $databaseUser = "root";
    $databasePassword = "";

    $database = new mysqli($databaseLocation, $databaseUser, $databasePassword, $databaseName);

    if (!$database) {
        echo 'Access Error MySQL';
        exit();
    }

    mysqli_set_charset($database, 'utf8');

    if (!mysqli_select_db($database, $databaseName)) {
        echo 'error in ' . $databaseName;
        exit();
    }
    return $database;
}
