<?php
$host = "localhost";
$db_name = "lab2";
$username = "root"; // Default XAMPP username
$password = "";     // Default XAMPP password is empty

try {
    $conn = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo json_encode(["status" => "error", "message" => "Connection failed: " . $e->getMessage()]);
    die();
}
?>