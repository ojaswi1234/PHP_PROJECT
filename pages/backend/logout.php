<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sleep_tracker";

$con = mysqli_connect($servername, $username, $password, $dbname);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Delete all data from sleep_tracker table
$delete_query = "DELETE FROM sleep_tracker";
$con->query($delete_query);

mysqli_close($con);

// Clear session data
session_unset();
session_destroy();

// Redirect to main.php
header("Location: ../main.php");
exit();
?>