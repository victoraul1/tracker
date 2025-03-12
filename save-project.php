<?php
// save-project.php - Handles saving updates to the JSON file

// Prevent direct access without proper password
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('HTTP/1.0 403 Forbidden');
    exit('Access forbidden');
}

// Get the JSON data sent from the client
$jsonData = file_get_contents('php://input');
$data = json_decode($jsonData, true);

// Validate the data
if (!isset($data['projects']) || !is_array($data['projects']) || !isset($data['password'])) {
    header('HTTP/1.0 400 Bad Request');
    exit('Invalid data format');
}

// Verify password
if ($data['password'] !== 'pass') {
    header('HTTP/1.0 401 Unauthorized');
    exit('Invalid password');
}

// Remove password from data before saving
unset($data['password']);

// Save to projects.json file
$result = file_put_contents('projects.json', json_encode($data, JSON_PRETTY_PRINT));

if ($result === false) {
    header('HTTP/1.0 500 Internal Server Error');
    exit('Failed to save data');
} else {
    header('Content-Type: application/json');
    echo json_encode(['success' => true]);
}
?> 