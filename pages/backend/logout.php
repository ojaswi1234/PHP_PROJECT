<?php
session_start();
if (isset($_SESSION['average_sleep_hours'])) {
    $average_sleep_hours = $_SESSION['average_sleep_hours'];
    echo "Average sleeping hours for the week: " . $average_sleep_hours;

    unset($_SESSION['average_sleep_hours']);
    
} 
header("Location: ../main.php");
?>