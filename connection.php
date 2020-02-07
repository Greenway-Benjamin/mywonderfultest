<?php

function connect() {
$db = parse_url(getenv("DATABASE_URL"));

$host = 'ec2-184-72-235-80.compute-1.amazonaws.com';
$port = '5432';
$user = 'lhedqyiaipvdah';
$dbname = 'd5tf628c1e73sa';
$password = 'c31b22f594e65a47f7498e694612ea9965ed9c9a8da17464368660de119634fa';
try {
$pdo = new PDO("pgsql:" . sprintf(
    "host=$host;port=$port;user=$user;password=$password;dbname=$dbname",
    $db["host"],
    $db["port"],
    $db["user"],
    $db["pass"],
    ltrim($db["path"], "/")
));
    return $pdo;
} catch(PDOException $e){
 echo 'Broke, sucka';   
}
}
