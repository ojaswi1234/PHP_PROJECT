<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['mysql_username']) || !isset($_SESSION['mysql_password'])) {
    header('Content-Type: application/json');
    echo json_encode([]);
    exit();
}

$servername = "localhost";
$username = $_SESSION['mysql_username'];
$password = $_SESSION['mysql_password']; // Can be empty
$dbname = "sleep_tracker";

$con = mysqli_connect($servername, $username, $password, $dbname);

if (!$con) {
    header('Content-Type: application/json');
    echo json_encode([]);
    exit();
}

$query = "SELECT day FROM sleep_tracker";
$result = $con->query($query);

$days = [];
while ($row = $result->fetch_assoc()) {
    $days[] = $row['day'];
}

mysqli_close($con);

header('Content-Type: application/json');
echo json_encode($days);
?>