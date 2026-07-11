<?php
$host = "sql111.infinityfree.com";
$user = "if0_42386171";
$password = "YOUR_INFINITYFREE_PASSWOR";
$database = "if0_42386171_medical";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
