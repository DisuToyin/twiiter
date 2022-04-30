<?php
$dsn = 'mysql:host=localhost; dbname=twitter';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    echo 'Cpnnection error!  ' . $e->getMessage();
}
