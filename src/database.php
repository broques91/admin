<?php
    $servername = "localhost:8889";
    $username = "root";
    $password = "root";
    $database = "admin";

    try{
        $db = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }
?>