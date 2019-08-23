<?php

$host = "db"; // naziv servisa iz docker-compose.yml datoteke
$user = "svrdoljak";
$password = "docker123";
$db = "test_db";

$conn = new mysqli($host,$user,$password,$db);
if($conn->connect_error){
    echo "Connection failed" . $conn->connect_error;
}

echo "Successfully connected to MySQL";