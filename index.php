<?php

  ini_set('display_errors', 1);

include_once 'connection.php';

$connection = connect();

$sql = "CREATE TABLE hats (id INT, name VARCHAR (20))";
$stmt = $connection->prepare($sql);
$stmt->execute();
$stmt->closeCursor();

echo 'Hello Sucka';
