<?php

  ini_set('display_errors', 1);

include_once 'connection.php';

$connection = connect();

$sql = "insert into hats values (1,'cathat')";
$stmt = $connection->prepare($sql);
$stmt->execute();
$stmt->closeCursor();

echo 'Hello Sucka';
