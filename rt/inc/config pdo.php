<?php

$dbHost = 'localhost';
$dbName = 'career1';
$dbUser = 'root';
$dbPasw = '';
try {
    $dbConn = new PDO("mysql:host={$dbHost};dbname={$dbName}", $dbUser, $dbPasw);
    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo $e->getMessage();
}
//https://startbootstrap.com/template/sb-admin
	
	
?>