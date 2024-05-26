<?php
$servername = "feenix-mariadb-web.swin.edu.au";
$username = "cos20031_56";
$password = "HCFEyNZ7ZP";
$dbname = "cos20031_56_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
