<?php
// Include your Database class file
require_once ('../assets/partials/database.php');

$database = new Database();
$conn = $database->getConnection();

// Fetch tasks from the database
$stmt = $conn->prepare("SELECT id, task FROM tasks");
$stmt->execute();
$tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Return tasks as JSON (optional)
header('Content-Type: application/json');
echo json_encode($tasks);
?>
