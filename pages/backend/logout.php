<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['mysql_username']) || !isset($_SESSION['mysql_password'])) {
    header("Location: ../../login.php");
    exit();
}

$servername = "localhost";
$username = $_SESSION['mysql_username'];
$password = $_SESSION['mysql_password']; // Can be empty
$dbname = "sleep_tracker";

$con = mysqli_connect($servername, $username, $password, $dbname);

if ($con) {
    // Delete all data from sleep_tracker table
    $delete_query = "DELETE FROM sleep_tracker";
    $con->query($delete_query);
    mysqli_close($con);
}

// Clear session data
session_unset();
session_destroy();

// Redirect to login.php
header("Location: ../main.php");
exit();
?>