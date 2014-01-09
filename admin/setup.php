<?php
$host="localhost"; 

$root="root"; 
$root_password="JJoy1979"; 

$user='test_user';
$pass='test';
$db="newdb"; 

    try {
        $dbh = new PDO("mysql:host=$host", $root, $root_password);

        $dbh->exec("CREATE DATABASE `$db`;
                CREATE USER '$user'@'localhost' IDENTIFIED BY '$pass';
                GRANT ALL ON `$db`.* TO '$user'@'localhost';
                FLUSH PRIVILEGES;
                ") 
        $dbh->exec("CREATE TABLE test_table")
        or die(print_r($dbh->errorInfo(), true));

    } catch (PDOException $e) {
        die("DB ERROR: ". $e->getMessage());
    }

?>