<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

require_once 'db_config.php';

try {
    // Fetch all users from the database
    $stmt = $conn->prepare("SELECT * FROM users");
    $stmt->execute();

    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Return JSON response
    if (count($users) > 0) {
        echo json_encode(["status" => "success", "users" => $users]);
    } else {
        echo json_encode(["status" => "success", "message" => "No users found"]);
    }
} catch (PDOException $e) {
    echo json_encode(["status" => "error", "message" => $e->getMessage()]);
}
?>