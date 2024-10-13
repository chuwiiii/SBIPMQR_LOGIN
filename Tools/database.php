<?php
function getDatabaseConnection() {
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'login';

    $connection = new mysqli($host, $username, $password, $database);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
    return $connection;
}
?>

