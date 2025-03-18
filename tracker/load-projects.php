<?php
// load-projects.php - Loads projects from the JSON file

header('Content-Type: application/json');

if (file_exists('projects.json')) {
    // Return the file contents directly - it already has the correct structure
    echo file_get_contents('projects.json');
} else {
    // Return empty project structure if file doesn't exist yet
    echo '{"projects":[]}';
}
?> 