<?php

// Naziv servisa iz docker-compose.yml datoteke
$host = "db";
// Korisničko ime za spajanje na bazu podataka
$user = "svrdoljak";
// Lozinka za spajanje na bazu podataka
$password = "docker123";
// Naziv tablice
$db = "test_db";

// Kreiranje veze na bazu podataka
$conn = new mysqli($host,$user,$password,$db);
// Ako veza ne uspije, poruka "Veza nije uspjela" i greška se ispisuje
if($conn->connect_error){
    echo "Connection failed" . $conn->connect_error;
}
// Ako veza uspije, poruka "Uspješno spojen sa MySQL" se ispisuje
echo "Successfully connected to MySQL";