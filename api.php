<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'ajaxcrud';
$conn = mysqli_connect($host, $user, $password, $db);

if (!$conn) {
    echo json_encode(['message' => 'Database connection failed']);
}

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($output);
} else {
    echo json_encode(['message' => 'No record found']);
}