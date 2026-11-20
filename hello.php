<?php
// hello.php -Returns data as JSON, not HTML

header('Content-Type: application/json; charset=utf-8');

$response = [
    'message' => 'Hello from the server!',
    'student' => 'Jonathan P. Mina',
    'course' => 'IPT 2',
    'time' => date('Y-m-d H:i:s')
];

//Return JSON response
echo json_encode($response), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE;
?>