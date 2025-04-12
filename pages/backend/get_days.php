<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sleep_tracker";

$con = mysqli_connect($servername, $username, $password, $dbname);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
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