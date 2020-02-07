<?php

  ini_set('display_errors', 1);

include_once 'connection.php';

$connection = connect();

$sql = "select * from hats";
$stmt = $connection->prepare($sql);
$stmt->execute();
$hatsarray = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt->closeCursor();

foreach ($hatsarray as $hat) {
echo $hat['id'] . " and " . $hat['name'] . "<br>";
}
echo 'Hello Sucka';
